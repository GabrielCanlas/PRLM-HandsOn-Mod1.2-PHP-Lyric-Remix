<!-- Canlas, Gabriel C. -->
<!-- CYB-201 -->
<?php
$title = "Buttons";
$artist = "Lyn Lapid";
$mood = "Infatuation";

$verseCount = 2;
$repeatChorus = 2;

$nouns = ["words", "mouth", "time", "couch", "ceiling", "night", "sunrise", "mind", "buttons", "clothes", "melody", "head", "shirt", "back", "pink", "black", "hinge", "door", "date", "tour", "pin", "map"];
$verbs = ["know", "say", "waste", "stare", "go", "be", "stay", "get"];
$adjectives = ["Close", "closer", "alright", "supposed", "on", "your"];

$chorusIndex = "1"; 
$chorusIndex += 1;  
$chorusText = "Replay count: ";
$chorusText .= $repeatChorus * 2; 

$totalSections = $verseCount + $repeatChorus + 3; 

$bio = "“Buttons” by Lyn Lapid released on October 25th, 2024 is about Lyn’s feelings for her crush. 
Lyn released an Instagram reel about her feelings about why she wrote this song. She says “I had a crush on a boy… did 
I talk to him? No. Did I know anything about him? No. Did he know I existed? Probably not… did I write this pathetically 
borderline song about him? No further questions”. The lyrics convey the overwhelming feelings and thoughts she experiences during her crush."; // taken from https://genius.com/Lyn-lapid-buttons-lyrics
$footer = "Gabriel C. Canlas";

$verse1 = [
    "What's it like to $verbs[0]?",
    "The $nouns[0] in your $nouns[1] right 'fore you $verbs[1] them?",
    "I wanna $verbs[0] what's it like to $verbs[2]?",
    "$nouns[2] on your $nouns[3], $verbs[3] at the $nouns[4]"
];

$preChorus1 = [
    "If it's $adjectives[2] we can $verbs[4] from late $nouns[5]",
    "'Til $nouns[6], you're on my $nouns[7]",
    "I just wanna $verbs[5]—"
];

$chorus = [
    "$adjectives[0], $adjectives[1] than the $nouns[8] on your $nouns[9]",
    "Can I be the $nouns[10] you $verbs[0]?",
    "Stay on replay in your $nouns[11]",
    "What am I $adjectives[3] to do to $verbs[6] $adjectives[0] to you?"
];

$verse2 = [
    "What's it like to $verbs[5] the $nouns[12] on your $nouns[13]?",
    "What's it like to $verbs[5] the $nouns[14] to your $nouns[15]?",
    "A $nouns[16] on your $nouns[17], a $nouns[18] on your $nouns[19]",
    "Guess I'd like to be the $nouns[20] on your $nouns[21]"
];

$preChorus2 = [
    "From late $nouns[5]",
    "'Til $nouns[6], you're on my $nouns[7]",
    "And I just wanna $verbs[5]—"
];;

$outro = [
    "I just wanna be $adjectives[0]",
    "$adjectives[1] than the $nouns[8] on your $nouns[9]",
    "Can I be the $nouns[10] you $verbs[0]?",
    "Stay on replay in your $nouns[11]",
    "What am I $adjectives[3] to do to $verbs[6] $adjectives[0] to you?"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lyric Remix</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<?php echo "<h1>$title</h1>"; ?> 
<?php echo "<h2>by $artist</h2>"; ?> 
<?php echo "<p><em>Mood: $mood</em></p>"; ?> 
<?php echo "<p><strong>Total Sections:</strong> $totalSections</p>"; ?> 
<?php echo "<p><strong>$chorusText</strong></p>"; ?> 
<img src="balloons.jpg">


<?php echo "<h3>Verse 1</h3><div class='verse'>"; ?> 
<?php echo "<p>$verse1[0]</p>"; ?> 
<?php echo "<p>$verse1[1]</p>"; ?> 
<?php echo "<p>$verse1[2]</p>"; ?> 
<?php echo "<p>$verse1[3]</p>"; ?> 
<?php echo "</div>";  ?> 

<?php echo "<h3>Pre-Chorus</h3><div class='prechorus'>"; ?> 
<?php echo "<p>$preChorus1[0] </p>"; ?> 
<?php echo "<p>$preChorus1[1]</p>"; ?> 
<?php echo "<p>$preChorus1[2]</p>"; ?> 
<?php echo "</div>"; ?> 

<?php echo "<h3>Chorus</h3><div class='chorus'>"; ?>
<?php echo "<p>$chorus[0]</p>"; ?> 
<?php echo "<p>$chorus[1]</p>"; ?>
<?php echo "<p>$chorus[2]</p>"; ?>
<?php echo "<p>$chorus[3]</p>"; ?>
<?php echo "</div>"; ?>

<?php echo "<h3>Verse 2</h3><div class='verse'>"; ?>
<?php echo "<p>$verse2[0]</p>"; ?>
<?php echo "<p>$verse2[1]</p>"; ?>
<?php echo "<p>$verse2[2]</p>"; ?>
<?php echo "<p>$verse2[3]</p>"; ?>
<?php echo "</div>"; ?>

<?php echo "<h3>Pre-Chorus</h3><div class='prechorus' >"; ?>
<?php echo "<p>$preChorus2[0]</p>"; ?>
<?php echo "<p>$preChorus2[1]</p>"; ?>
<?php echo "<p>$preChorus2[2]</p>"; ?>
<?php echo " </div>"; ?>

<?php echo "<h3>Chorus</h3><div class='chorus'>"; ?>
<?php echo "<p>$chorus[0]</p>"; ?>
<?php echo "<p>$chorus[1]</p>"; ?>
<?php echo "<p>$chorus[2]</p>"; ?>
<?php echo "<p>$chorus[3]</p>"; ?>
<?php echo "</div>" ; ?>

<?php echo "<h3>Outro</h3><div class='outro'>"; ?>
<?php echo "<p>$outro[0]</p>" ; ?>
<?php echo "<p>$outro[1]</p>"; ?>
<?php echo "<p>$outro[2]</p>"; ?>
<?php echo "<p>$outro[3]</p>"; ?>
<?php echo "<p>$outro[4]</p>"; ?>
<?php echo "</div>"; ?>

<?php echo "<br><p><em>Background: $bio</em></p>"; ?>

<?php echo "<p>$footer</p>"; ?>
</body>
</html>
