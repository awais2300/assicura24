<?php $this->load->view('front_app/common/UserHeader'); ?>

<style>
    card-body-text {
        float: left;
        padding: 2px;
        margin: auto;
        width: 100%
    }

    .card-fluid {
        width: 300px;
        padding: 0px;
        margin: auto;
    }
</style>

<div class="container my-4">
    <div class="card">
        <div class="card-header">
            <p> <b style="font-size:25px"> Concludi l'acquisto </b>
                <p>
                    <p>
                        Gentile <label for="name">Name/Surname</label>, tu invitiamo ad effettuare il bonifico dell'importo di <label for="price">Offer Price</label> per completare l'acquisto del preventivo <label for="reqNo">Request No</label>.
                    </p>
        </div>
        <div class="card-body">

            <div class="form-group row" style="margin-left:80px"> 
                <p class="col-sm-4 col-form-label">Beneficiario:</p>
                <div class="col-sm-8">
                    <p>Prime Assicurazioni S.p.A</p>
                </div>
            </div>
            <hr>
            <div class="form-group row" style="margin-left:80px">
                <p class="col-sm-4 col-form-label">IBAN:</p>
                <div class="col-sm-8">
                    <p>IT71B0306901629100000019394</p>
                </div>
            </div>
            <hr>
            <div class="form-group row" style="margin-left:80px">
                <p class="col-sm-4 col-form-label">Indirizzo agenzia:</p>
                <div class="col-sm-8">
                    <p>Intesa Sanpaolo, Piazza Armando Diaz 2 - 20123 Milano (MI)</p>
                </div>
            </div>
            <hr>
            <div class="form-group row" style="margin-left:80px">
                <p class="col-sm-4 col-form-label">Causale:</p>
                <div class="col-sm-8">
                    <label for="plateNumber">License plate - offer number</label>
                </div>
            </div>
            <hr>
            <div class="form-group row" style="margin-left:80px">
                <p class="col-sm-4 col-form-label">Importo:</p>
                <div class="col-sm-8">
                    <label for="price">Offer Price</label>
                </div>
            </div>

        </div>






    </div>
</div>
<?php $this->load->view('front_app/common/footer'); ?>