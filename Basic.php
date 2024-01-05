<?php
$sinhVien =array(
    array("ten" => "Nguyen Van A", "tuoi" => 20, "diem" => 85),
    array("ten" => "Tran Thi B", "tuoi" => 21, "diem" => 75),
    array("ten" => "Le Van C", "tuoi" => 22, "diem" => 90),
);

foreach ($sinhVien as $sv) {
    echo "Tên: ".$sv["ten"] . "\n";
    echo "Tuổi: ".$sv["tuoi"] . "\n";
    echo "Điểm: ".$sv["diem"] . "\n";

    if ($sv["diem"] >= 80){
        echo "Đánh giá : Xuất sắc \n";
    } elseif ($sv["diem"] >= 70){
        echo "Đánh giá: Khá \n";
    }
    else {
        echo "Đánh giá: Yếu";
    }
    echo "\n";
}

$tongDiem = 0;
foreach ($sinhVien as $sv){
    $tongDiem += $sv["diem"];
}
$avg = $tongDiem / count($sinhVien);

echo "Điểm trung bình của lớp là: ".$avg;