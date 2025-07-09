import os
import subprocess

def get_large_files(limit_mb=50):
    try:
        output = subprocess.check_output(
            ['git', 'rev-list', '--objects', '--all'], universal_newlines=True
        )
        file_sizes = []

        for line in output.splitlines():
            parts = line.strip().split()
            if len(parts) != 2:
                continue
            sha, path = parts
            try:
                size = int(subprocess.check_output(
                    ['git', 'cat-file', '-s', sha]
                ).strip())
                if size > limit_mb * 1024 * 1024:
                    file_sizes.append((size, path))
            except:
                continue

        file_sizes.sort(reverse=True)
        for size, path in file_sizes:
            print(f"{size / (1024 * 1024):.2f} MB - {path}")
    except subprocess.CalledProcessError as e:
        print("Error running git command:", e)

if __name__ == "__main__":
    get_large_files()
