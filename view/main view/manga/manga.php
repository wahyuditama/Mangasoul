<link rel="stylesheet" href="assets/css/style2.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="bbx-manga">
    <div class="bbx-mm-in">
        <div class="box-manga-inside ">
            <div class="box-manga-in">
                <div class=" img-cover">
                    <a href="">
                        <img src="assets/img/img-1.jpg" alt="tumpnail" class="full-img ">
                        <div class="card-text">

                        </div>
                    </a>
                </div>
            </div>
            <div class="pptx">
                <div class="pptx-title">
                    <p class="title-manga-pptx">Kono Subarashī Sekai ni Shukufuku wo!</p>
                </div>
                <div class="pptx-sinopsis">
                    <div class="bbx-sinopsis">
                        <p class="txt-in">sinopsis</p>
                        <p class="txt-in">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum laborum minima dolores autem facere expedita cum doloribus explicabo soluta natus. Voluptatem officiis iure vel! Recusandae perspiciatis nemo impedit porro doloribus?</p>
                    </div>
                </div>
                <div class="pptx-genre">
                    <div class="bbx-genre">
                        <p class="txt-in">Genre </p>
                    </div>
                    <div class="bbx-genre">
                        <p class="txt-in">Shonen</p>
                        <p class="txt-in">Gorengan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="chapters-mmg">
            <div class="bbx-ch-mmg">
                <div class="bbx-tt-mmg">
                    <p>
                        Kono Subarashī Sekai ni Shukufuku wo!
                    </p>
                </div>
                <div class="tbl-ch-mmg">
                    <div class="tbl-b-in-ch-mmg">
                        <ul>
                            <li>
                                <div class="tbl-in-ch-mmg">
                                    <a href="#">Chapter</a>
                                    <span class="date"></span>
                                </div>
                                <div class="download-mmg">
                                    <i class="fa-regular fa-cloud-arrow-down"></i>
                                </div>
                            </li>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ssm">
        <?php
        include "../sidebar.php";
        ?>
    </div>

</div>

<?php
include "../footer.php";
?>
<script>
    // Fungsi untuk mendapatkan tanggal dalam format "Month day, year"
    function getFormattedDate() {
        const options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        const formattedDate = new Date().toLocaleDateString('en-US', options);

        return formattedDate;
    }

    // Mendapatkan semua elemen dengan class "date" dan mengisi dengan tanggal saat ini
    const dateElements = document.querySelectorAll('.date');
    dateElements.forEach(element => {
        element.textContent = getFormattedDate();
    });
</script>