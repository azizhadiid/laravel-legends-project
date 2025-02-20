document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah aksi default
            
            let form = this.closest('form'); // Cari elemen form terdekat
            if (!form) {
                console.error("Form tidak ditemukan!"); // Debugging jika form tidak ditemukan
                return;
            }

            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Data ini akan dihapus secara permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
