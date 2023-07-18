const sidebarOverflow = document.getElementById('overflow');
let isHovered = false;

// Fungsi untuk melakukan scroll otomatis ke elemen paling bawah saat di-hover
function scrollToBottom() {
  sidebarOverflow.scrollTop = sidebarOverflow.scrollHeight;
}

// Fungsi untuk mengatur scroll kembali ke atas saat mouse meninggalkan elemen
function scrollToTop() {
  sidebarOverflow.scrollTop = 0;
}

// Tambahkan event listener untuk hover
sidebarOverflow.addEventListener('mouseenter', () => {
  isHovered = true;
  scrollToBottom();
});

sidebarOverflow.addEventListener('mouseleave', () => {
  isHovered = false;
  scrollToTop();
});

// Tambahkan event listener untuk mengatur scroll otomatis saat konten berubah
sidebarOverflow.addEventListener('DOMSubtreeModified', () => {
  if (isHovered) {
    scrollToBottom();
  }
});