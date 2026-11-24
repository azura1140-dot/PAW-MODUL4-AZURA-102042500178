<form action="{{ route('courses.index') }}" method="GET" style="display: flex; gap: 0.75rem; flex-wrap: wrap; align-items: center;">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Cari kode atau nama mata kuliah..."
        class="form-control"
    >

    <select name="semester" class="form-control">
        <option value="">Semua Semester</option>
        @foreach($semesters as $sem)
            <option value="{{ $sem }}" {{ request('semester') == $sem ? 'selected' : '' }}>
                {{ $sem }}
            </option>
        @endforeach
    </select>

    <select name="sort" class="form-control">
        <option value="nama_asc" {{ request('sort') == 'nama_asc' ? 'selected' : '' }}>Nama (A - Z)</option>
        <option value="nama_desc" {{ request('sort') == 'nama_desc' ? 'selected' : '' }}>Nama (Z - A)</option>
        <option value="sks_desc" {{ request('sort') == 'sks_desc' ? 'selected' : '' }}>SKS Tertinggi</option>
        <option value="sks_asc" {{ request('sort') == 'sks_asc' ? 'selected' : '' }}>SKS Terendah</option>
    </select>

    <button type="submit" class="btn btn-primary">Filter & Cari</button>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Reset</a>
</form>