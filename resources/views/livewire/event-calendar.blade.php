<div>
    <h2>Event Calendar</h2>

    <ul>
        @foreach($icons as $event)
            <li>{{ $event->title }} - {{ $event->start_date }} to {{ $event->end_date }}</li>
        @endforeach
    </ul>

    <form wire:submit.prevent="createEvent">
        <label for="title">Title:</label>
        <input type="text" id="title" wire:model="title" required>

        <label for="start_date">Start Date:</label>
        <input type="datetime-local" id="start_date" wire:model="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="datetime-local" id="end_date" wire:model="end_date" required>

        <button type="submit">Create Event</button>
    </form>
</div>
