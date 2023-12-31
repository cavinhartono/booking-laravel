<div>
    <div class="section-title">
        <h2 class="title">Buat Booking</h2>
        <p class="subtitle">
            Daftarkan kunjungan Anda dengan mengambil antrian online
        </p>
    </div>

    <form wire:submit.prevent="store" role="form" class="php-email-form">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <fieldset class="fieldset">
            <form class="form" action="">
                <div class="input-form">
                    <label for="date">Tanggal/Hari</label>
                    <select wire:model="day" wire:change="getTimeSlot($event.target.value)" id="date">
                        <option value="">Pilih</option>
                        @foreach ($days as $day)
                        <option value="{{ $day->day }}">{{ $day->label }}</option>
                        @endforeach
                    </select>
                    @error('day') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <div class="input-form">
                    <label for="go">Kedatangan</label>
                    <select wire:model="slot" id="go">
                        <option value="">Pilih</option>
                        @foreach ($timeSlot as $val)
                        <option value="{{ $val->id }}" {{ ($val->orders_count >= $val->quota) ? 'disabled="disabled"':'' }}>
                            {{ $val->name }} ({{ $val->orders_count }}/{{ $val->quota }} Kuota)
                        </option>
                        @endforeach
                    </select>
                    @error('slot') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <div class="input-form">
                    <button class="btn primary">Search</button>
                </div>
            </form>
        </fieldset>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Waktu Kedatangan</label>
                    <select wire:model="slot" class="form-control">
                        <option value="">Pilih</option>
                        @foreach ($timeSlot as $val)
                        <option value="{{ $val->id }}" {{ ($val->orders_count >= $val->quota) ? 'disabled="disabled"':'' }}>
                            {{ $val->name }} ({{ $val->orders_count }}/{{ $val->quota }} Kuota)
                        </option>
                        @endforeach
                    </select>
                    @error('slot') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" wire:model="name" class="form-control">
            @error('name') <p class="text-danger">{{ $message }}</p> @enderror
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="text" wire:model="age" class="form-control">
                    @error('age') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Whatsapp</label>
                    <input type="text" wire:model="phone_number" class="form-control">
                    @error('phone_number') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Keperluan</label>
            <select wire:model="note" onchange="showHideNote()" id="note" class="form-control">
                <option value="">Pilih</option>
                <option value="Kontrol Hamil">Kontrol Hamil</option>
                <option value="Promil">Promil</option>
                <option value="Lain-Lain">Lain-Lain</option>
            </select>
            @error('note') <p class="text-danger">{{ $message }}</p> @enderror
        </div>
        <div class="form-group" id="note_form" style="display: none">
            <label for="">Catatan</label>
            <textarea wire:model="note_additional" class="form-control" id="note_additional" cols="5" rows="5"></textarea>
            @error('note_additional') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="text-center">
            <button type="submit">Buat Janji</button>
        </div>
    </form>
</div>