<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Benvenuto, {{ Auth::user()->name }}!</h1>
    <h2>Ticket</h2>
    <ul>
        <!-- Lista dei ticket -->
@foreach ($tickets as $ticket)
<div class="ticket">
    <h3>{{ $ticket->title }}</h3>
    <p>Status: {{ $ticket->status }}</p>
    <p>Operatore: {{ $ticket->operator ? $ticket->operator->name : 'Non assegnato' }}</p>

    <!-- Modifica stato del ticket -->
    <form action="{{ route('ticket.updateStatus', $ticket->id) }}" method="POST">
        @csrf
        <select name="status">
            <option value="ASSEGANTO" {{ $ticket->status == 'ASSEGANTO' ? 'selected' : '' }}>Assegnato</option>
            <option value="IN LAVORAZIONE" {{ $ticket->status == 'IN LAVORAZIONE' ? 'selected' : '' }}>In Lavorazione</option>
            <option value="CHIUSO" {{ $ticket->status == 'CHIUSO' ? 'selected' : '' }}>Chiuso</option>
        </select>
        <button type="submit">Aggiorna stato</button>
    </form>

    <!-- Assegna operatore al ticket -->
    <form action="{{ route('ticket.assignOperator', ['ticket' => $ticket->id, 'operator' => $operators->first()->id]) }}" method="POST">
        @csrf
        <select name="operator">
            @foreach ($operators as $operator)
                <option value="{{ $operator->id }}" {{ $ticket->operator_id == $operator->id ? 'selected' : '' }}>
                    {{ $operator->name }}
                </option>
            @endforeach
        </select>
        <button type="submit">Assegna operatore</button>
    </form>
</div>
@endforeach

    </ul>
</body>
</html>
