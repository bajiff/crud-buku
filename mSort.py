# Fungsi untuk melakukan Merge Sort
def merge_sort(arr):
    # Jika array berisi 0 atau 1 elemen, sudah terurut
    if len(arr) <= 1:
        return arr

    # Cari titik tengah untuk membagi array
    mid = len(arr) // 2

    # Bagi array menjadi dua bagian
    left = arr[:mid]
    right = arr[mid:]

    # Rekursif: urutkan bagian kiri dan kanan
    left = merge_sort(left)
    right = merge_sort(right)

    # Gabungkan bagian kiri dan kanan yang sudah diurutkan
    return merge(left, right)

# Fungsi untuk menggabungkan dua array terurut
def merge(left, right):
    result = []  # array untuk hasil gabungan
    i = j = 0    # pointer untuk left dan right

    # Bandingkan elemen dari kedua array
    while i < len(left) and j < len(right):
        if left[i] < right[j]:
            result.append(left[i])  # ambil dari left
            i += 1
        else:
            result.append(right[j])  # ambil dari right
            j += 1

    # Jika masih ada sisa elemen di left atau right, tambahkan
    result.extend(left[i:])
    result.extend(right[j:])

    return result

# --------------------------
# Contoh penggunaan fungsi

# Data yang diberikan
data = [38, 27, 43, 3, 9, 82, 10]

# Panggil fungsi merge_sort
hasil = merge_sort(data)

# Tampilkan hasil
print("Hasil setelah Merge Sort:", hasil)
