<div id="notification" class="notification" style="display: none;">
    <span class="close" onclick="closeNotification()">&times;</span>
    <p id="notificationMessage"></p>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    .notification {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #fefefe;
        border: 1px solid #888;
        border-radius: 5px;
        padding: 15px;
        position: fixed;
        top: 70px;
        right: 20px;
        width: 300px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .close {
        color: #aaa;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
    }

    .success {
        color: green;
    }

    .error {
        color: red;
    }
</style>

<script>
    function showNotification(message, type) {
        const notification = document.getElementById('notification');
        const messageElement = document.getElementById('notificationMessage');

        messageElement.textContent = message;
        messageElement.className = type;

        notification.style.display = 'flex';

        setTimeout(() => {
            closeNotification();
        }, 3000);
    }

    function closeNotification() {
        const notification = document.getElementById('notification');
        notification.style.display = 'none';
    }
</script>