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
        if (response.status != 200) {
            // TODO: redirect to error page
        }
    }).catch(function (error) {
        // TODO: redirect to error page
    });
}


window.updateEnabled = function (id) {
    if (status === null || id === null)
        return;

    // Find toggled checkbox
    let enabledCheckbox = document.getElementById('enabledCheckbox_' + id);

    // Update menu record in database
    axios.put('/api/menu/' + id, {
        enabled: enabledCheckbox.checked
    }).then(function (response) {
        if (response.status != 200) {
            // TODO: redirect to error page
        }
    }).catch(function (error) {
        // TODO: redirect to error page
    });
}
