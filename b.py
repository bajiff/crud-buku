# Fungsi binary search dengan komentar
def binary_search(arr, target):
    low, high = 0, len(arr) - 1  # batas bawah dan atas pencarian

    while low <= high:  # lakukan selama batas bawah tidak melewati batas atas
        mid = (low + high) // 2  # cari indeks tengah

        if arr[mid] == target:  # jika elemen tengah adalah target
            return mid  # kembalikan indeks
        elif arr[mid] < target:  # jika elemen tengah lebih kecil dari target
            low = mid + 1  # geser pencarian ke sebelah kanan
        else:  # jika elemen tengah lebih besar dari target
            high = mid - 1  # geser pencarian ke sebelah kiri

    return -1  # jika tidak ditemukan

# --------------------------
# Contoh penggunaan fungsi

# Data yang sudah diurutkan
data = [3, 10, 17, 23, 36, 45, 59, 72, 88, 95]

# Target yang ingin dicari
target = 45

# Panggil fungsi binary_search
hasil = binary_search(data, target)

# Tampilkan hasil
if hasil != -1:
    print(f"Data {target} ditemukan di indeks {hasil}")
else:
    print(f"Data {target} tidak ditemukan dalam data")
