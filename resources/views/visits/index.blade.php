<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
</html>
<body>
<ul>
    @foreach ($visits as $visit)
        <li>{{ $visit->id . ", " . $visit->license_plate }}</li>
    @endforeach
</ul>
</body>