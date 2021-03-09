<div class="case-0"><?= $show[0]; ?></div>
<div class="case-1"><?= $show[1]; ?></div>
<div class="case-2"><?= $show[2]; ?></div>
<div class="case-3"><?= $show[3]; ?></div>
<div class="case-4"><?= $show[4]; ?></div>
<div class="case-5"><?= $show[5]; ?></div>
<div class="case-6"><?= $show[6]; ?></div>

<div class="case-7"><?= $show[7]; ?></div>
<div class="case-8"><?= $show[8]; ?></div>
<div class="case-9"><?= $show[9]; ?></div>
<div class="case-10"><?= $show[10]; ?></div>
<div class="case-11"><?= $show[11]; ?></div>
<div class="case-12"><?= $show[12]; ?></div>
<div class="case-13"><?= $show[13]; ?></div>

<div class="case-14"><?= $show[14]; ?></div>
<div class="case-15"><?= $show[15]; ?></div>
<div class="case-16"><?= $show[16]; ?></div>
<div class="case-17"><?= $show[17]; ?></div>
<div class="case-18"><?= $show[18]; ?></div>
<div class="case-19"><?= $show[19]; ?></div>
<div class="case-20"><?= $show[20]; ?></div>

<div class="case-21"><?= $show[21]; ?></div>
<div class="case-22"><?= $show[22]; ?></div>
<div class="case-23"><?= $show[23]; ?></div>
<div class="case-24"><?= $show[24]; ?></div>
<div class="case-25"><?= $show[25]; ?></div>
<div class="case-26"><?= $show[26]; ?></div>
<div class="case-27"><?= $show[27]; ?></div>

<div class="case-28"><?= $show[28]; ?></div>
<div class="case-29"><?= $show[29]; ?></div>
<div class="case-30"><?= $show[30]; ?></div>
<div class="case-31"><?= $show[31]; ?></div>
<div class="case-32"><?= $show[32]; ?></div>
<div class="case-33"><?= $show[33]; ?></div>
<div class="case-34"><?= $show[34]; ?></div>

<div class="case-35"><?= $show[35]; ?></div>
<div class="case-36"><?= $show[36]; ?></div>
<div class="case-37"><?= $show[37]; ?></div>
<div class="case-38"><?= $show[38]; ?></div>
<div class="case-39"><?= $show[39]; ?></div>
<div class="case-40"><?= $show[40]; ?></div>
<div class="case-41"><?= $show[41]; ?></div>



<option value="1" <?php if ($dateActual[1] == 1) { ?> selected <?php } ?>><?= $months[0] ?></option>
<option value="2" <?php if ($dateActual[1] == 2) { ?> selected <?php } ?>><?= $months[1] ?></option>
<option value="3" <?php if ($dateActual[1] == 3) { ?> selected <?php } ?>><?= $months[2] ?></option>
<option value="4" <?php if ($dateActual[1] == 4) { ?> selected <?php } ?>><?= $months[3] ?></option>
<option value="5" <?php if ($dateActual[1] == 5) { ?> selected <?php } ?>><?= $months[4] ?></option>
<option value="6" <?php if ($dateActual[1] == 6) { ?> selected <?php } ?>><?= $months[5] ?></option>
<option value="7" <?php if ($dateActual[1] == 7) { ?> selected <?php } ?>><?= $months[6] ?></option>
<option value="8" <?php if ($dateActual[1] == 8) { ?> selected <?php } ?>><?= $months[7] ?></option>
<option value="9" <?php if ($dateActual[1] == 9) { ?> selected <?php } ?>><?= $months[8] ?></option>
<option value="10" <?php if ($dateActual[1] == 10) { ?> selected <?php } ?>><?= $months[9] ?></option>
<option value="11" <?php if ($dateActual[1] == 11) { ?> selected <?php } ?>><?= $months[10] ?></option>
<option value="12" <?php if ($dateActual[1] == 12) { ?> selected <?php } ?>><?= $months[11] ?></option>




<div class="monday"><?= $days[0]; ?></div>
<div class="tuesday"><?= $days[1]; ?></div>
<div class="wednesday"><?= $days[2]; ?></div>
<div class="thursday"><?= $days[3]; ?></div>
<div class="friday"><?= $days[4]; ?></div>
<div class="saturday"><?= $days[5]; ?></div>
<div class="sunday"><?= $days[6]; ?></div>

<?= "Jour de la semaine (1 à 7) : " . $dateInit ?>
<br>
<?= "Nb jours dans le mois : " . $dateActual[4] ?>
<br>
<?= "GET Month : " . $test ?>

<!-- <input type="number" class="form-control" id="year" name="year" value="<?= $dateActual[3] ?>"> -->





<div class="lundi pb-4 text-truncate"><?= $days[1]; ?></div>
<div class="tuesday text-truncate"><?= $days[2]; ?></div>
<div class="wednesday text-truncate"><?= $days[3]; ?></div>
<div class="thursday text-truncate"><?= $days[4]; ?></div>
<div class="friday text-truncate"><?= $days[5]; ?></div>
<div class="saturday text-truncate"><?= $days[6]; ?></div>
<div class="sunday text-truncate"><?= $days[7]; ?></div>


<?php
for ($e = 1; $e <= 7; $e++) {
    echo "<div class='$days[$e] text-truncate'>$days[$e]</div>";
}
?>