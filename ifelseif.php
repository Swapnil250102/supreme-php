<?php

$slot = "C1";
#Course Details of WINSEM2020-21

#A1 slot
if ($slot == "A1"){
    echo "COURSE: ITE1008 OPEN SOURCE PROGRAMMING<br>";
    echo "EMBEDDED THEORY AND EMBEDDED PROJECT<br>";
    echo "FACULTY NAME: PROF. JAYAKUMAR S.<br>";
    echo "FACULTY ID: 12566<br>";
    echo "FACULTY CABIN NO.: SJT-510-A03<br>";
    echo "FACULTY SCHOOL: SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING<br>";
}
elseif ($slot == "B1"){
    echo "COURSE: ITE2002 OPERATING SYSTEMS<br>";
    echo "EMBEDDED THEORY AND EMBEDDED LAB<br>";
    echo "FACULTY: PROF. SENTHIL KUMAR P.<br>";
    echo "FACULTY ID: 12566<br>";
    echo "FACULTY CABIN NO.: SJT-510-A03<br>";
    echo "FACULTY SCHOOL: SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING<br>";
}
#C1 slot
elseif ($slot == "C1"){
    echo "COURSE: MAT3004 APPLIED LINEAR ALGEBRA<br>";
    echo "THEORY ONLY<br>";
    echo "FACULTY: PROF. RAMESH KUMAR D.<br>";
    echo "FACULTY ID: 12566<br>";
    echo "FACULTY CABIN NO.: SJT-510-A03<br>";
    echo "FACULTY SCHOOL: SCHOOL OF ADVANCED SCIENCES<br>";
}
#D1 slot & L57+L58
elseif ($slot == "D1"){
    echo "COURSE: PHY1701 ENGINEERING PHYSICS<br>";
    echo "EMBEDDED THEORY AND EMBEDDED LAB<br>";
    echo "FACULTY: PROF. RAJESHKUMAR MOHANRAMAN<br>";
    echo "FACULTY ID: 12566<br>";
    echo "FACULTY CABIN NO.: SJT-510-A03<br>";
    echo "FACULTY SCHOOL: SCHOOL OF ADVANCED SCIENCES<br>";
}
#E1 slot
elseif ($slot == "E1"){
    echo "COURSE: STS2202 SOFT SKILLS<br>";
    echo "THEORY ONLY<br>";
    echo "FACULTY: SMART<br>";
    echo "FACULTY ID: 12566<br>";
    echo "FACULTY CABIN NO.: SJT-510-A03<br>";
    echo "FACULTY SCHOOL: SCHOOL OF SOCIAL SCIENCES AND LANGUAGES<br>";
}
#F1 slot
elseif ($slot == "F1"){
    echo "COURSE: ITE1006 THEORY OF COMPUTATION<br>";
    echo "THEORY ONLY<br>";
    echo "FACULTY: PROF. KURUVA LAKSHMANNA<br>";
    echo "FACULTY ID: 12566<br>";
    echo "FACULTY CABIN NO.: SJT-510-A03<br>";
    echo "FACULTY SCHOOL: SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING<br>";
}
#G1 slot
elseif ($slot == "G1"){
    echo "COURSE: ITE1007 OBJECT ORIENTED ANALYSIS AND DESIGN<br>";
    echo "EMBEDDED THEORY AND EMBEDDED PROJECT<br>";
    echo "FACULTY: PROF. PRABHU J.<br>";
    echo "FACULTY ID: 12566<br>";
    echo "FACULTY CABIN NO.: SJT-510-A03<br>";
    echo "FACULTY SCHOOL: SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING<br>";
}
else{
    echo "ERROR";
}

?>