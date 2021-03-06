<form class="form-horizontal form-label-left">


    <!-- PROJEKTNAME -->
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project_name">Projektname
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="project_name" required="required"
                   class="form-control col-md-7 col-xs-12 "
                   placeholder="Bsp.: AP Bffm Dresden-Neustadt"
            value="<?php echo val('',$abfrage['projektname']); ?>">
        </div>
    </div>

    <!-- ANSPRECHPARTNER -->
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project_ansprechpartner">Ansprechpartner <span
                    class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" placeholder="Bsp.: max.mustermann" value="<?php echo val($_SESSION['user']['username'],$abfrage['ansprechpartner']); ?>"
                   id="project_ansprechpartner" required="required"
                   class="form-control col-md-7 col-xs-12">
        </div>
    </div>

    <!-- PROJEKTLEITER -->
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project_projektleiter">Projektleiter (Benutzername)
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" placeholder="Bsp.: max.mustermann" value="<?php echo val($_SESSION['user']['username'],$abfrage['projektleiter']); ?>"
                   id="project_projektleiter" required="required"
                   class="form-control col-md-7 col-xs-12">
        </div>
    </div>


    <!-- Start -->
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project_start">Startdatum<span
                    class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="project_start" name="project_start" required="required"
                   class="form-control col-md-7 col-xs-12" value="<?php echo val('',date("d.m.Y", strtotime($abfrage['start'])))?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project_ende">voraussichtliches Ende
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="project_ende" name="project_ende"
                   class="form-control col-md-7 col-xs-12"
                   value="<?php echo val('',date("d.m.Y", strtotime($abfrage['ende'])))?>">
        </div>
    </div>

</form>

<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script src="../vendors/moment/moment.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script>
    var datumeinstellungen = {
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            "format": "DD.MM.YYYY",
            "separator": " - ",
            "applyLabel": "Übernehmen",
            "cancelLabel": "Abbrechen",
            "fromLabel": "von",
            "toLabel": "bis",
            "customRangeLabel": "benutzerdefiniert",
            "weekLabel": "KW",
            "daysOfWeek": [
                "So",
                "Mo",
                "Di",
                "Mi",
                "Do",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "Januar",
                "Februar",
                "MÄrz",
                "April",
                "Mai",
                "Juni",
                "Juli",
                "August",
                "September",
                "Oktober",
                "November",
                "Dezember"
            ],
            "firstDay": 1
        }

    };
    $('input[name="project_start"]').daterangepicker(datumeinstellungen);
    $('input[name="project_ende"]').daterangepicker(datumeinstellungen);
</script>
