<?php if (!isset($_SESSION['age_confirm'])) : ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <div id="confirm_block">
        <div id="confirm_overlay"></div>
        <div id="confirm_popup" class="confirm-modal">
            <h3>Juste une minute...</h3>
            <p>Pour consulter ce site, vous devez avoir 18 ans ou plus. Est-ce bien votre cas ?</p>
            <button id="age_yes">Oui, je suis majeur</button>
            <button id="age_no">Non, j'ai moins de 18 ans</button>
        </div>
        <div id="confirm_child" class="confirm-modal">
            <h3>Encore un peu de patience</h3>
            <p>Vous n'avez pas l'age requis pour consulter ce site.<br />
                Vous pourrez nous rendrez visite quand vous aurez 18 ans !</p>
        </div>
    </div>
    <script>
        $(function() {
            $("#age_yes").click(function() {
                $.ajax({
                    url: "ageconfirm.php",
                    type: "POST",
                    dataType: "json",
                    data: {
                        "confirmed": "yes"
                    }
                }).always(function() {
                    $("#confirm_block").remove();
                });
            })
        });
        $("#age_no").click(function() {
            $("#confirm_popup").remove();
            $("#confirm_child").show();
        })
    </script>
<?php endif ?>