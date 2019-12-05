<!DOCTYPE html>
<html>

<head>
    <title> CA DATABASE </title>
    <meta name="theme-color" content="#FF0000">
    <meta name="msapplication-navbutton-color" content="#FF0000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#FF0000">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align:left;
            padding: 8px;
        }

    </style>
</head>
<body>
<a href="https://techfest.org/penaltymail" class="w3-button w3-black">CA uploads</a>
<a href="https://techfest.org/adminca" class="w3-button w3-black">CA Events</a>
<a href="https://techfest.org/admins" class="w3-button w3-black">CA Database</a>
<button id="btnExport" onclick="javascript:xport.toCSV('CA_Database');"> Export to CSV</button>



<h2> CA DATABASE-{{$t2}}</h2>

<table id="CA_Database">
    <tr>
        <th>ID</th>
        <th>Rank</th>
        <th>Name</th>
        <th>Contact no.</th>
        <th>Email ID</th>
        <th>Pincode</th>
        <th>Points</th>
        <th>No. of referral</th>
        <th>Loyalty Points</th>
        <th>Verification Button(still working)</th>
        <th>referred by</th>

        <th>College</th>
        <th>Address</th>
        <th>No. of logins</th>

    </tr>

    <?php
    $i = 0;
    ?>
    @foreach($t as $t1)

        <?php
        $i ++;
        ?>
        <tr>
            <th>{{$t1->ca_id}}</th>
            <th>{{$i}}</th>
            <th>{{$t1->name}}</th>
            <th>{{$t1->number}}</th>
            <th>{{$t1->email}}</th>
            <th>{{$t1->pincode}}</th>
            <th>{{$t1->points}}</th>
            <th>{{$t1->no_of_referral}}</th>
            <th>{{$t1->loyalty_points}}</th>
            <th><a href="https://techfest.org/penaltymail/{{$t1->email}}">Verify</a></th>
            <th>{{$t1->referred_by}}</th>

            <th>{{$t1->college}}</th>
            <th>{{$t1->address}}</th>
            <th>{{$t1->no_of_login}}</th>

        </tr>
    @endforeach
</table>
<script>
    var xport = {
        _fallbacktoCSV: true,
        toXLS: function(tableId, filename) {
            this._filename = (typeof filename == 'undefined') ? tableId : filename;

            //var ieVersion = this._getMsieVersion();
            //Fallback to CSV for IE & Edge
            if ((this._getMsieVersion() || this._isFirefox()) && this._fallbacktoCSV) {
                return this.toCSV(tableId);
            } else if (this._getMsieVersion() || this._isFirefox()) {
                alert("Not supported browser");
            }

            //Other Browser can download xls
            var htmltable = document.getElementById(tableId);
            var html = htmltable.outerHTML;

            this._downloadAnchor("data:application/vnd.ms-excel" + encodeURIComponent(html), 'xls');
        },
        toCSV: function(tableId, filename) {
            this._filename = (typeof filename === 'undefined') ? tableId : filename;
            // Generate our CSV string from out HTML Table
            var csv = this._tableToCSV(document.getElementById(tableId));
            // Create a CSV Blob
            var blob = new Blob([csv], { type: "text/csv" });

            // Determine which approach to take for the download
            if (navigator.msSaveOrOpenBlob) {
                // Works for Internet Explorer and Microsoft Edge
                navigator.msSaveOrOpenBlob(blob, this._filename + ".csv");
            } else {
                this._downloadAnchor(URL.createObjectURL(blob), 'csv');
            }
        },
        _getMsieVersion: function() {
            var ua = window.navigator.userAgent;

            var msie = ua.indexOf("MSIE ");
            if (msie > 0) {
                // IE 10 or older => return version number
                return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
            }

            var trident = ua.indexOf("Trident/");
            if (trident > 0) {
                // IE 11 => return version number
                var rv = ua.indexOf("rv:");
                return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
            }

            var edge = ua.indexOf("Edge/");
            if (edge > 0) {
                // Edge (IE 12+) => return version number
                return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
            }

            // other browser
            return false;
        },
        _isFirefox: function(){
            if (navigator.userAgent.indexOf("Firefox") > 0) {
                return 1;
            }

            return 0;
        },
        _downloadAnchor: function(content, ext) {
            var anchor = document.createElement("a");
            anchor.style = "display:none !important";
            anchor.id = "downloadanchor";
            document.body.appendChild(anchor);

            // If the [download] attribute is supported, try to use it

            if ("download" in anchor) {
                anchor.download = this._filename + "." + ext;
            }
            anchor.href = content;
            anchor.click();
            anchor.remove();
        },
        _tableToCSV: function(table) {
            // We'll be co-opting `slice` to create arrays
            var slice = Array.prototype.slice;

            return slice
                .call(table.rows)
                .map(function(row) {
                    return slice
                        .call(row.cells)
                        .map(function(cell) {
                            return '"t"'.replace("t", cell.textContent);
                        })
                        .join(",");
                })
                .join("\r\n");
        }
    };

</script>

</body>
</html>