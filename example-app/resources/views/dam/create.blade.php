<form action="{{route('dam.store')}}" method="post">

@csrf

    <label for="description">Description:</label>
    <input type="text" name="description"><br><br>
    <label for="has_professor">Has Professor:</label><br><br>
    Yes<input type="radio" name="has_professor" value="1">
    No<input type="radio" name="has_professor" value="0"><br><br>
    <label for="year">Year:</label>
    <input type="number" name="year"><br><br>
    <label for="created_at">Created At:</label>
    <input type="date" name="created_at"><br><br>
    <label for="avg_mark">Average Mark:</label>
    <input type="number" name="avg_mark"><br><br>
    <label for="name">Name:</label>
    <input type="text" name="name"><br><br>
    <label for="course">Course:</labe>
    First<input type="radio" name="course" value="1">
    Second<input type="radio" name="course" value="2"><br><br>
    <button type="submit">Submit</button>
</form>