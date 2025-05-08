# Fungsi binary_search menerima array (arr) yang sudah diurutkan dan nilai target yang ingin dicari
def binary_search(arr, target):
    # low dan high adalah batas awal dan batas akhir dari area pencarian
    low, high = 0, len(arr) - 1
    
    # selama batas bawah belum melewati batas atas
    while low <= high:
        # cari indeks tengah dari low dan high
        mid = (low + high) // 2
        
        # jika elemen di tengah adalah target, kembalikan indeksnya
        if arr[mid] == target:
            return mid
        # jika elemen di tengah lebih kecil dari target, cari di sebelah kanan
        elif arr[mid] < target:
            low = mid + 1
        # jika elemen di tengah lebih besar dari target, cari di sebelah kiri
        else:
            high = mid - 1
    
    # jika target tidak ditemukan, kembalikan -1
    return -1
