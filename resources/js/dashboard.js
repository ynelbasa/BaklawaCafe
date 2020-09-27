const axios = require('axios');

window.updateStatus = function (id, status) {
    if (status === null || id === null)
        return;

    // Find clicked dropdown
    let statusDropdown = document.getElementById('statusDropdown_' + id);

    // Remove previous styling class and apply the recent one
    statusDropdown.classList.remove('pending', 'confirmed', 'cancelled');
    statusDropdown.classList.add(status);

    // Update status display text
    statusDropdown.innerHTML = status;

    // Update booking record in database
    axios.put('/api/booking/' + id, {
        status: status
    }).then(function (response) {
        if (response.status = 200) {
            console.log('saved');
        } else {
            console.log('error');
        }
    }).catch(function (error) {
        console.log('error');
    });
}
