document.addEventListener('DOMContentLoaded', () => {
    const edits = document.querySelectorAll('.edit');
    const titleInput = document.getElementById('titleEdit');
    const descInput = document.getElementById('descriptionEdit');
    const snoInput = document.getElementById('snoEdit');
    const editModal = new bootstrap.Modal(document.getElementById('editModal'));
    const form = document.querySelector('form');
    const urlParams = new URLSearchParams(window.location.search);
    const msg = urlParams.get('msg');

    if (msg) {
        const toastMsg = document.getElementById('toastMsg');
        toastMsg.textContent = msg;

        const toast = new bootstrap.Toast(document.getElementById('liveToast'), {
            delay: 5000  // 10 seconds
        });
        toast.show();

        // Optionally clean the URL
        // window.history.replaceState({}, document.title, window.location.pathname);
    }

    edits.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const tr = e.target.closest('tr');
            const title = tr.children[1].innerText;
            const description = tr.children[2].innerText;

            titleInput.value = title;
            descInput.value = description;
            snoInput.value = e.target.id;

            editModal.show();
        });
    });

    form.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            form.submit(); // Explicitly submit the form
        }
    });

    $(document).ready(function () {
        $('#myTable').DataTable({
            responsive: true,
            pageLength: 5,
            lengthChange: true,
            language: {
                searchPlaceholder: "Search notes...",
                search: "",
            }
        });
    });
});


