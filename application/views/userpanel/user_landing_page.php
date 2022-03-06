<?php $this->load->view('userpanel/common/UserHeader'); ?>

<style>
    select {
        font-family: 'FontAwesome', 'Second Font name';
        font-family: Arial, Helvetica, sans-serif;
    }

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

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <b> Concludi l'acquisto </b>

            Gentile <label for="name"><?= $user_data['name'] . '' . $user_data['surname']; ?></label>, tu invitiamo ad effettuare il bonifico dell'importo di <label for="price"><?= '€' . $request_data['total']; ?></label> per completare l'acquisto del preventivo <label for="reqNo"><?= $request_data['request_no'] ?></label>.

        </div>
        <div class="card-body">

            <div class="form-group row" style="margin-left:80px">
                <a class="col-sm-4 col-form-label">Beneficiario:</a>
                <div class="col-sm-8">
                    <a>Prime Assicurazioni S.p.A</a>
                </div>
            </div>
            <hr>
            <div class="form-group row" style="margin-left:80px">
                <a class="col-sm-4 col-form-label">IBAN:</a>
                <div class="col-sm-8">
                    <a>IT71B0306901629100000019394</a>
                </div>
            </div>
            <hr>
            <div class="form-group row" style="margin-left:80px">
                <a class="col-sm-4 col-form-label">Indirizzo agenzia:</a>
                <div class="col-sm-8">
                    <a>Intesa Sanpaolo, Piazza Armando Diaz 2 - 20123 Milano (MI)</a>
                </div>
            </div>
            <hr>
            <div class="form-group row" style="margin-left:80px">
                <a class="col-sm-4 col-form-label">Causale:</a>
                <div class="col-sm-8">
                    <label for="plateNumber"><?= $request_data['Plate_no']; ?> - <?= $request_data['request_no']; ?></label>
                </div>
            </div>
            <hr>
            <div class="form-group row" style="margin-left:80px">
                <a class="col-sm-4 col-form-label">Importo:</a>
                <div class="col-sm-8">
                    <label for="price"><?= '€' . $request_data['total']; ?></label>
                </div>
            </div>

        </div>






    </div>
</div>
<?php $this->load->view('userpanel/common/footer'); ?>