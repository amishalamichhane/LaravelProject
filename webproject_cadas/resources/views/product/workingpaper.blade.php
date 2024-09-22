@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA</title>
</head>
<body>
    
    <div class="working-paper-container">
        <h1>Working Papers</h1>
    
        <!-- Paper 1 -->
        <div class="paper-card">
          {{-- <h2>Title: The Impact of Family Migration on Child Development</h2>
          <p class="author">Author: Dr. Jane Smith, Dr. John Doe</p>
          <p class="date">Date: September 2024</p>
          <p class="summary">
            This paper examines the socio-psychological effects of family migration on children left behind. Using case studies from multiple countries, it analyzes how parental migration influences emotional, educational, and social development in children.
          </p> --}}
          <a href="#" class="button">Download Full Paper</a>
        </div>
    
        <!-- Paper 2 -->
        <div class="paper-card">
          {{-- <h2>Title: Mental Health Challenges Among Migrant Children</h2>
          <p class="author">Author: Dr. Alice Johnson</p>
          <p class="date">Date: August 2024</p>
          <p class="summary">
            This working paper focuses on the mental health challenges faced by children in migrant families. The study explores interventions that can help mitigate anxiety, depression, and other psychological issues related to family separation.
          </p> --}}
          <a href="#" class="button">Download Full Paper</a>
        </div>
    
        <!-- Paper 3 -->
        <div class="paper-card">
          {{-- <h2>Title: Educational Outcomes for Left-Behind Children</h2>
          <p class="author">Author: Dr. Maria Rodriguez</p>
          <p class="date">Date: July 2024</p>
          <p class="summary">
            This paper presents findings on the academic challenges faced by children who remain in their home countries while their parents migrate. It includes recommendations for improving support systems to enhance educational attainment in left-behind children.
          </p> --}}
          <a href="#" class="button">Download Full Paper</a>
        </div>
    
      </div>
    
</body>
</html>
@endsection