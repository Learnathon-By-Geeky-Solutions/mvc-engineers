<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
            <tr>
                <th>Booking ID</th>
                <th>Customer Name</th>
                <th>email</th>
                <th>Phone</th>
                <th>Guest Count</th>
                <th>Booking time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->phone }}</td>
                    <td>{{ $reservation->sit_required}}</td>
                    <td>{{ \Carbon\Carbon::parse($reservation->date_time)->format('h:i d M Y') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
