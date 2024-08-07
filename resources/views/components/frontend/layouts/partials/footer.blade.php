<footer class="py-4 bg-secondary">
    <div class="text-center text-white">Copyright © Rentit 2023</div>
</footer>


<script>
    function favorite(ID) {
        var icon = document.getElementById(ID);
        if (icon.className.match("regular")) {
            icon.className = "fa-solid fa-heart me-3 fs-4";
        } else {
            icon.className = "fa-regular fa-heart me-3 fs-4";
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
