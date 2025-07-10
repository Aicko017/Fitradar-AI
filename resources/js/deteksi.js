document.addEventListener('DOMContentLoaded', function () {
    const previewResult = document.getElementById('previewResult');
    const resultContainer = document.getElementById('resultContainer');

    const foodName = document.getElementById('foodName');
    const calories = document.getElementById('calories');
    const protein = document.getElementById('protein');
    const fat = document.getElementById('fat');
    const carbs = document.getElementById('carbs');
    const fiber = document.getElementById('fiber');
    const servingSize = document.getElementById('servingSize');
    const accuracy = document.getElementById('accuracy');

    const imageUpload = document.getElementById('imageUpload');
    let isSending = false;

    if (imageUpload && !imageUpload.dataset.listenerAdded) {
        imageUpload.dataset.listenerAdded = 'true';
        imageUpload.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const base64Image = e.target.result;
                    displayAndSendImage(base64Image);  // Menampilkan gambar setelah diupload
                };
                reader.readAsDataURL(file);
            }
        });
    }

    function displayAndSendImage(base64Image) {
        if (isSending) return;
        isSending = true;

        previewResult.src = base64Image;
        previewResult.classList.remove('hidden');
        resultContainer.classList.remove('hidden');

        foodName.textContent = 'Mendeteksi makanan...';
        calories.textContent = protein.textContent = fat.textContent = carbs.textContent = fiber.textContent = servingSize.textContent = accuracy.textContent = 'Loading...';

        const blob = base64ToBlob(base64Image);
        const formData = new FormData();
        formData.append('file', blob, `image.jpg`);

        fetch('http://127.0.0.1:8001/predict', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.results && data.results.length > 0) {
                const result = data.results[0];
                foodName.textContent = result.food ?? 'Tidak diketahui';
                calories.textContent = result.kalori ?? 'N/A';
                protein.textContent = result.protein ?? 'N/A';
                fat.textContent = result.lemak ?? 'N/A';
                carbs.textContent = result.karbohidrat ?? 'N/A';
                fiber.textContent = result.serat ?? 'N/A';
                servingSize.textContent = result.porsi ?? '-';
                accuracy.textContent = result.akurasi ? `${parseFloat(result.akurasi).toFixed(2)}%` : '-';

                // Kirim gambar dan hasil deteksi ke database
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const simpanForm = new FormData();
                simpanForm.append('image', blob, `deteksi.jpg`);
                simpanForm.append('deteksi_makanan', result.food);
                simpanForm.append('kalori', result.kalori);
                simpanForm.append('protein', result.protein);
                simpanForm.append('lemak', result.lemak);
                simpanForm.append('karbohidrat', result.karbohidrat);
                simpanForm.append('serat', result.serat);

                fetch('/simpan-hasil-deteksi', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: simpanForm
                })
                .then(res => res.json())
                .then(res => {
                    isSending = false;
                    if (res.success) {
                        alert('✅ Hasil deteksi berhasil disimpan!');
                    } else {
                        alert('❌ Gagal simpan: ' + res.message);
                    }
                })
                .catch(err => {
                    isSending = false;
                    console.error('❌ Gagal kirim ke Laravel:', err);
                    alert('Gagal menyimpan hasil deteksi: ' + err.message);
                });
            }
        })
        .catch(error => {
            isSending = false;
            alert('Error: ' + error.message);
        });
    }

    function base64ToBlob(base64) {
        const [prefix, data] = base64.split(',');
        const mime = prefix.match(/:(.*?);/)[1];
        const byteString = atob(data);
        const byteArray = new Uint8Array(byteString.length);
        for (let i = 0; i < byteString.length; i++) {
            byteArray[i] = byteString.charCodeAt(i);
        }
        return new Blob([byteArray], { type: mime });
    }

    function stopCamera() {
        if (stream) {
            stream.getTracks().forEach(track => track.stop());
            video.srcObject = null;
        }
    }

    window.addEventListener('beforeunload', stopCamera);
    window.addEventListener('pagehide', stopCamera);
});
