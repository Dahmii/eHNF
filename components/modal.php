<!-- Book Launch Modal -->
<?php
// Get all images from the modal folder
$imageFolder = "assets/images/modal/";
$images = glob($imageFolder . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

// Select a random image
$randomImage = $images[array_rand($images)];
?>

<!-- Book Launch Modal -->
<div id="bookLaunchModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="<?php echo $randomImage; ?>" alt="Book Launch" class="modal-img">

        <!-- Order Now Button -->
        <button class="btn btn-secondary btn-hover-primary" style="margin-top: 30px;" onclick="window.location.href='https://shop.easyhnf.com/'">Preorder Now!</button>
    </div>
</div>

<!-- Modal CSS -->
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
    }
    .modal-content {
        position: relative;
        background: #fff;
        padding: 20px;
        max-width: 500px;
        border-radius: 8px;
        text-align: center;
    }
    .modal-img {
        max-width: 100%;
        height: auto;
    }
    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        cursor: pointer;
    }
    .order-btn {
        margin-top: 20px;
        padding: 10px 20px;
        background: #28a745;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        border-radius: 5px;
        transition: background 0.3s ease;
    }
    .order-btn:hover {
        background: #218838;
    }
</style>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var modal = document.getElementById("bookLaunchModal");
        var closeBtn = document.querySelector(".close");

        // Show modal when page loads
        modal.style.display = "flex";

        // Close modal when clicking the close button
        closeBtn.onclick = function() {
            modal.style.display = "none";
        };

        // Close modal when clicking outside of content
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    });
</script>
