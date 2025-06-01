document.addEventListener('DOMContentLoaded', function() {
    // Initialize all flash toasts
    var flashToasts = document.querySelectorAll('[id^="flash-toast-"]');
    flashToasts.forEach(function(toastEl) {
        // Move the toast into the container
        document.getElementById('toast-container').appendChild(toastEl);
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    });

    // Global function to show any toast
    window.showToast = function(message, type = 'success') {
        // Create toast element
        var toastEl = document.createElement('div');
        toastEl.className = 'toast align-items-center text-bg-' +
            (type === 'error' ? 'danger' : type) + ' border-0';
        toastEl.setAttribute('role', 'alert');
        toastEl.setAttribute('aria-live', 'assertive');
        toastEl.setAttribute('aria-atomic', 'true');

        // Create toast content
        var iconClass = 'bi bi-' +
            (type === 'success' ? 'check-circle-fill' :
                (type === 'error' ? 'exclamation-circle-fill' : 'info-circle-fill'));

        toastEl.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="${iconClass} me-2"></i>
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            `;

        // Add to container and show
        document.getElementById('toast-container').appendChild(toastEl);
        var toast = new bootstrap.Toast(toastEl, {
            delay: 4000
        });
        toast.show();

        // Remove from DOM after hiding
        toastEl.addEventListener('hidden.bs.toast', function() {
            toastEl.remove();
        });
    };

    // Example of how to use the showToast function:
    // showToast('This is a success message', 'success');
    // showToast('This is an error message', 'error');
    // showToast('This is an info message', 'info');
    // showToast('This is a warning message', 'warning');
});

// Keep the existing cart toast functionality
function showCartToast() {
    var toastEl = document.getElementById('cartToast');
    if (toastEl) {
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    } else {
        // If cartToast doesn't exist, use the unified function
        showToast('Item added to the cart!', 'success');
    }
}
