# Fungsi untuk melakukan Quick Sort
def quick_sort(arr):
    # Jika panjang array 0 atau 1, sudah terurut
    if len(arr) <= 1:
        return arr
    
    # Pilih pivot - sesuai kasus, kita pilih elemen terakhir
    pivot = arr[-1]
    
    # Bagi array menjadi dua bagian
    left = []   # elemen yang lebih kecil dari pivot
    right = []  # elemen yang lebih besar dari pivot
    
    # Pisahkan elemen ke left dan right, kecuali pivot itu sendiri
    for item in arr[:-1]:  # semua elemen kecuali pivot
        if item < pivot:
            left.append(item)
        else:
            right.append(item)
    
    # Rekursif: quick_sort ke bagian left dan right, lalu gabungkan
    return quick_sort(left) + [pivot] + quick_sort(right)

# --------------------------
# Contoh penggunaan fungsi

# Data yang diberikan
data = [10, 7, 8, 9, 1, 5]

# Panggil fungsi quick_sort
hasil = quick_sort(data)

# Tampilkan hasil
print("Hasil setelah Quick Sort:", hasil)
