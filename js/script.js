function setupPagination(tableId, rowsPerPage) {
    const table = document.getElementById(tableId);
    const tbody = table.querySelector('tbody');
    const rows = Array.from(tbody.rows);
    const pagination = document.getElementById('pagination');

    function displayPage(page) {
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = (index >= start && index < end) ? '' : 'none';
        });

        updatePagination(page);
    }

    function updatePagination(currentPage) {
        const totalPages = Math.ceil(rows.length / rowsPerPage);
        pagination.innerHTML = '';

        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement('button');
            button.innerText = i;
            button.className = (i === currentPage) ? 'active' : '';
            button.addEventListener('click', () => displayPage(i));
            pagination.appendChild(button);
        }
    }

    displayPage(1); // Display the first page
}



