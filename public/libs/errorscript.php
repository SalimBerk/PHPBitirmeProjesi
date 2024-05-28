<script>
    function hata() {

        const hataId = document.getElementById("alertDanger");
        if (hataId) {

            hide(hataId)

        }


    }
    hata();

    function hide(closeError) {
        setTimeout(() => {

            closeError.classList.remove("opacity-100")
            closeError.classList.add("opacity-50")




        }, 3000);
        setTimeout(() => {

            closeError.classList.add("hidden");


        }, 4000);

    }
</script>