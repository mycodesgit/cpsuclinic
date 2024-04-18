<!DOCTYPE html>
<html>
<head>
    <title>PRE-ENTRANCE HEALTH EXAMINATION REPORT</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .table-responsive {
            overflow-x: auto;
            font-size: 12px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        .table tr {
            margin: 0px;
        }

        .table th,
        .table td {
            padding: 2px;
            overflow: hidden;
        }

        th{
            height: 15px !important;
        }
        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .border {
            border: 1px solid black;
        }

        .border-b {
            border-bottom: 1px solid black !important;
        }

        .tr-b {
            border-bottom: 1px solid black !important;
        }

        .w-100 {
            width: 100%
        }

        .td-b1 {
            border-bottom: 1px solid black;
            position: relative;
        }

        .period{
            color: white;
        }

        .bordered{
            border: 1px solid black;
        }

        #checkbox {
            appearance: none; 
            -webkit-appearance: none;
            -moz-appearance: none; 
            width: 14px; 
            height: 14px; 
            border: none; 
            outline: none; 
            background-color: transparent; 
            cursor: pointer;
            margin-bottom: 4px;
        }

        #checkbox:checked::before {
            content: '\2713'; 
            display: inline-block;
            font-size: 18px; 
            color: #000; 
        }

        #checkbox::before {
            display: none;
        }
    </style>
</head>
<body>
    <div style="width: 100%; text-align: center;">
        <img src="{{ asset("style/dist/img/pehe-header.png") }}" width="80%" style="margin-top: -60px;" alt="" srcset="">
    </div>
    <span style="font-size: 8px; margin: 0px;">(Please write legibly and use black pen only)</span>
    <h5 style="margin-top: -2px;">PERSONAL INFORMATION</h5>
    <div class="table-responsive" style="border: 1px solid black; margin-top: -18px;">
        <table class="table">
            <tr class="tr-b">
                <td class="text-left">Name:</td>
                <td class="text-center"><b>Edwin</td>
                <td class="text-center"><b>Abril Jr</td>
                <td class="text-center"><b>Trio</td>
                <td></td>
            </tr>
            <tr style="font-size: 9px;">
                <td></td>
                <td class="text-center">(Last)</td>
                <td class="text-center">(First)</td>
                <td class="text-center">(Middle)</td>
                <td class="text-center"></td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td width="53">Date of Birth:</td>
                <td><div class="tr-b w-100 text-center"><b>August 24, 1997 <span class="period">.</span></div></td>
                <td width="18">Age:</td>
                <td><div class="tr-b w-100 text-center"><b>26 <span class="period">.</span></div></td>
                <td width="18">Sex:</td>
                <td><div class="tr-b w-100 text-center"><b>Male <span class="period">.</span></div></td>
                <td width="48">Civil Status:</td>
                <td><div class="tr-b w-100 text-center"><b>Single <span class="period">.</span></div></td>
                <td width="45">Nationality:</td>
                <td><div class="tr-b w-100 text-center"><b>Filipino <span class="period">.</span></div></td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td width="53">Date of Birth:</td>
                <td><div class="tr-b w-100"><b>Dahile, Mabinay, Negros Oriental <span class="period">.</span></div></td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td width="67">Contact number:</td>
                <td><div class="tr-b w-100"><b>09063084301 <span class="period">.</span></div></td>
                <td width="18">Religion:</td>
                <td><div class="tr-b w-100"><b>Roman Catholic <span class="period">.</span></div></td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td width="20">College/Department:</td>
                <td><div class="tr-b w-100 text-center"><b>College Of Computer Studies <span class="period">.</span></div></td>
                <td width="20">Course/Year</td>
                <td><div class="tr-b w-100 text-center"><b> BSIT-2C <span class="period">.</span></div></td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td width="113">Name of Parents/ Guardian:</td>
                <td><div class="tr-b w-100 text-center"><b>Jose Marie Chan <span class="period">.</span></div></td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td width="37">Address:</td>
                <td><div class="tr-b w-100"><b>Dahile, Mabinay, Negros Oriental <span class="period">.</span></div></td>
            </tr>
        </table>
        <table class="table" style="margin-bottom: 10px;">
            <tr>
                <td width="80">Contact Number/s:</td>
                <td><div class="tr-b w-100 text-center"><b>09063084301, 09367318218 <span class="period">.</span></div></td>
                <td width="15">Occupation:</td>
                <td><div class="tr-b w-100 text-center"><b>Bussiness Man <span class="period">.</span></div></td>
            </tr>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th rowspan="3" class="bordered text-center" width="140">ANTHROPOMETRICS</th>
                    <td class="" style="border-top: 1px solid black;">Height: <b><span class="td-b1 text-center" style="display: inline-block; width: 50px;"> 5"8 </span> ft/in</td>
                    <th rowspan="3" class="bordered text-center"  width="110">VITAL SIGNS</th>
                    <td class="" style="border-top: 1px solid black;">
                        Temp:  <b><span class="td-b1 text-center" style="display: inline-block; width: 50px;"> 5"8 </span> C BP:  <b><span class="td-b1 text-center" style="display: inline-block; width: 50px;"> 75 </span>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Weight:  <b><span class="td-b1 text-center" style="display: inline-block; width: 50px;"> 5"8 </span>Kg</td>
                    <td>
                        PR:  <b><span class="td-b1 text-center" style="display: inline-block; width: 50px;"> 5"8 </span>/min PR:  <b><span class="td-b1 text-center" style="display: inline-block; width: 50px;"> 75 </span>/min
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid black;">
                       BMI:  <b><span class="td-b1 text-center" style="display: inline-block; width: 50px;"> 5"8 </span>;<span class="td-b1 text-center" style="display: inline-block; width: 50px;"> 5"8 </span>
                    </td>
                    <td style="border-bottom: 1px solid black;"></td>
                </tr>
            </tbody>
        </table>
        
    </div>
    <h5 style="margin-top: -0.3px;">MEDICAL HISTORY</h5>
    <div class="table-responsive" style="border: 1px solid black; margin-top: -18px;">
        <table class="table">
            <thead>
                <tr>
                    <th class="bordered text-center" width="108">DISEASE</th>
                    <th class="bordered text-center" width="20"></th>
                    <th class="bordered text-center">Speccific Disease/<br>Remarks</th>
                    <th class="bordered text-center" colspan="4" width="100">Hospital <br> Confinement</th>
                    <th class="bordered text-center">Date/s of Hospitalization, if confined</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bordered">Allergy (Food, Medicine)</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">COVID-19 Infection</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Nosebleed</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox"></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Dengue Fever</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox"></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Rheumatic Fever</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox"></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Typhoid Fever</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Arthritis</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Urinary Tract Infect, STD</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Amoebiasis</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Hyperacidity</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Asthma</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Hepatitis A/B</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Heart Disease</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Mumps</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Tuberculosis, Pneumonia</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Chicken Pox</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Measles</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Fainting Spells. Sezure</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Hernia</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
                <tr>
                    <td class="bordered">Thyroid Disease, Cancer</td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><b></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Yes</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">No</td>
                    <td class="bordered text-center"><b></td>
                </tr>
            </tbody>
        </table>
        
        <table class="table">
            <tbody>
                <tr>
                    <td class="bordered text-center" width="132" rowspan="3"><b>IMMUNIZTIONS</td>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered text-center">Chicken Pox</td>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered text-center">Hepatitis A</td>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered text-center">Influenza</td>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered text-center">Tetanus Toxoid</td>
                </tr>
                <tr>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered text-center">HPV Vaccine</td>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered text-center">Hepatitis B</td>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered text-center">Pneumonia</td>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered text-center">Rabies</td>
                </tr>
                <tr>
                    <td class="bordered text-center" width="20"></td>
                    <td colspan="7">
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            COVID-19 Vaccine: <span class="td-b1 text-center" style="display: inline-block; width: 90px;"></span> 1st Dose <span class="td-b1 text-center" style="display: inline-block; width: 60px;"></span> 2nd: <span class="td-b1 text-center" style="display: inline-block; width: 60px;"></span><br>
                            Booster Dose <span class="td-b1 text-center" style="display: inline-block; width: 90px;"></span> 1st: <span class="td-b1 text-center" style="display: inline-block; width: 60px;"></span> 2nd: <span class="td-b1 text-center" style="display: inline-block; width: 60px;"></span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="bordered text-center" width="132"><b>Smoking</td>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered" colspan="7">
                        <div style="margin-top: 10px;">
                            <span class="td-b1 text-center" style="display: inline-block; width: 50px;"></span> (sticks/day for <span class="td-b1 text-center" style="display: inline-block; width: 50px;"></span> years) 
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="bordered text-center" width="132"><b>Drinking</td>
                    <td class="bordered text-center" width="20"></td>
                    <td class="bordered" colspan="7">
                        <div style="margin-top: 10px;">
                            <span class="td-b1 text-center" style="display: inline-block; width: 50px;"></span> (beer per <span class="td-b1 text-center" style="display: inline-block; width: 50px;"></span>;<span class="td-b1 text-center" style="display: inline-block; width: 50px;"></span>shots per <span class="td-b1 text-center" style="display: inline-block; width: 50px;"></span>) 
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th class="bordered text-center" width="132" rowspan="2">MENSTRUAL HISTORY</th>
                    <th class="bordered text-center">Menarche</th>
                    <th class="bordered text-center">Duration</th>
                    <th class="bordered text-center" colspan="4">Interval</th>
                    <th class="bordered text-center" width="80">Pads Used per Day</th>
                </tr>
                <tr>
                    <td class="bordered text-center"></td>
                    <td class="bordered text-center"></td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Regular</td>
                    <td class="bordered text-center"><input type="checkbox" id="checkbox" checked></td>
                    <td class="bordered text-center">Irregular</td>
                    <td class="bordered text-center"></td>
                </tr>
            </thead>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th class="bordered text-center" width="132">MENSTRUAL SYMPTOMS</th>
                    <td class="bordered text-center" width="221"></td>
                    <td class="bordered text-center" width="30">LMP</td>
                    <td class="bordered text-center"></td>
                </tr>
            </thead>
        </table>
    </div>
    <p style="font-size: 12px; margin-top: -2px;"><b>I hereby certify that the above history is true to best of my knowledge. </b></p>
    <table class="table" style="margin-top: 40px;">
        <tr>
            <td class="text-center"><span class="td-b1 text-center" style="display: inline-block; width: 100%;"></span><b>Stdent's Signature</td>
            <td class="text-center" width="300"></td>
            <td class="text-center" width=""><span class="td-b1 text-center" style="display: inline-block; width: 100%;"></span><b><span style="color: white;">..........</span>Date<span style="color: white;">..........</span></td>
        </tr>
    </table>
    <table class="table" spellcheck="margin-top: 8px;">
        <tr>
            <td class="text-center" style="font-size: 12px;"><br><br><br>Documnet Control Code: CPSU-F-MDHU-01 Effective Date: 09/12/20218 Page No.: of 2</td>
        </tr>
    </table>
    <table class="table" style="font-size: 15px;">
        <tr>
            <td class="bordered text-center" width="38%">Abril</td>
            <td class="bordered text-center" width="38%">Edwin</td>
            <td class="bordered text-center" width="38%">Trio</td>
            <td class="bordered text-center" width="16%">26</td>
        </tr>
        <tr>
            <th class="text-center">LAST NAME</th>
            <th class="text-center">FIRST NAME</th>
            <th class="text-center">MIDDLE NAME</th>
            <th class="text-center">AGE</th>
        </tr>
    </table>
    <table class="table" style="font-size: 15px; ">
        <thead>
            <tr>
                <th class="bordered text-center" colspan="7">PHYSICAL EXAMINATION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="bordered text-center" width="155">FINDING</th>
                <th class="bordered text-center" width="30">E/N</th>
                <th class="bordered text-center" colspan="4">FINDING/S</th>
                <th class="bordered text-center" width="110">DESCRIPTION AND OTHER FINDINGS</th>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">SKIN</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Discoloration</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Congential Marks</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Lesion</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Deformity</td>
            </tr>
            <tr>
                <th class="bordered text-center">HEAD</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Deformity</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Mass/Nodules</td>
                <td class="bordered text-center"></td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">EYES</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Deformity</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Discharges</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Swelling</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Pale/Red Conjunctiva</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">EARS</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Hearing Acuity</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Deformity</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">R <span class="td-b1 text-center" style="display: inline-block; width: 30px;">  </span> L <span class="td-b1 text-center" style="display: inline-block; width: 30px;">  </span> </td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Discharge</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">NOSE</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Deformity</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Lesion</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Bleeding</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Discharge</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">MOUTH AND TONGUE</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Inflamation</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Lesion</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Tongue Deviation</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Deformity</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">NECK & LYMPH NODES</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Rigidity</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Tenderness</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Mass/Swelling</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Fistula</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">HEART</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Tachucardia</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Murmur</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Bradycardia</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Irregular Beat</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">CHEST</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Tenderness</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Retraction</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Bulges</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Deformity</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">LUNGS</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Wheezing</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Crackles</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Rales</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center"></td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">BREAST & AXILLA</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Dimpling</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Mass/Nodules</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Enlarge lymph Nodes</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Discharges (Nipples)</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">ABDOMEN</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Striae</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Mass/Nodules</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Tenderness</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Distention</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">BACK & SHOULDERS</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Lordosis</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Scliosis</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Kyphosis</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Deformity</td>
            </tr>
            <tr>
                <th class="bordered text-center" rowspan="2">EXTRMITES</th>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Deformity</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Temors</td>
                <td class="bordered text-center" rowspan="2"></td>
            </tr>
            <tr>
                <td class="bordered text-center"></td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Clubbing of nails</td>
                <td class="bordered text-center" width="15"></td>
                <td class="bordered text-center">Lesion</td>
            </tr>
            <tr>
                <th class="bordered text-center">OTHER SIGNIFICANT FINDINGS</th>
                <td class="bordered text-center" colspan="6"></td>
            </tr>
            <tr style="border-width: 1px 1px 0 1px; border-style: solid;">
                <td><br><input type="checkbox" id="checkbox1" style="transform: scale(1.5); margin-bottom: -5px; padding-left:2px;"> Fit for enrollment</td>
                <td colspan="3"><br><input type="checkbox" id="checkbox1" style="transform: scale(1.5); margin-bottom: -5px;"> Not fit for enrollment</td>
                <td colspan="2"><br><input type="checkbox" id="checkbox1" style="transform: scale(1.5); margin-bottom: -5px;"> Pending; reasons</td>
                <td ></td>
            </tr>
            <tr style="border-width: 0px 1px 1px 1px; border-style: solid;">
                <td colspan="7" style="text-align: right; height: 50px;">
                    <span class="td-b1 text-center" style="display: inline-block; width: 50%;"></span>
                </td>
            </tr>
            <tr>
                <td colspan="7" style="text-align: right; height: 150px;">
                    <span class="td-b1 text-center" style="display: inline-block; width: 51%;">Ma'am Nurse</span><br>
                    <span style="font-size: 13px;">Name and Signature of Examining Registedred Nurse/Physician
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
