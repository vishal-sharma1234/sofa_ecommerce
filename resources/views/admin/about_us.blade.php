@extends('layouts.admin_layout.master')

@section('content')
    <style>
        .text-area {
            resize: none;
        }
    </style>
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-ecommerce">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-6">
                                        <div class="card-header">
                                            <h3 class="card-tile mb-0">About Us</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('admin.about_us.store') }}" method="POST">
                                                @csrf

                                                <div class="row">
                                                    {{-- ABOUT --}}
                                                    {{-- <div class="form-group mb-3"> --}}
                                                    <div class="col-md-6 mb-3">
                                                        {{-- <label>About</label> --}}
                                                        <label class="form-label">About <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="about" class="form-control text-area" rows="3">{{ old('about', $aboutUs->content['about'] ?? '') }}</textarea>
                                                    </div>

                                                    {{-- MISSION --}}
                                                    <div class="col-md-6 mb-3">
                                                        {{-- <label>Our Mission</label> --}}
                                                        <label class="form-label">Our Mission <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="mission" class="form-control text-area" rows="3">{{ old('mission', $aboutUs->content['mission'] ?? '') }}</textarea>
                                                    </div>

                                                    {{-- GOALS --}}
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Our Goals <span
                                                                class="text-danger">*</span></label>
                                                        <div id="goals-wrapper">
                                                            @php
                                                                $goals = $aboutUs->content['goals'] ?? [''];
                                                            @endphp

                                                            @foreach ($goals as $goal)
                                                                <div class="d-flex mb-2 goal-item">
                                                                    <input type="text" name="goals[]"
                                                                        class="form-control" value="{{ $goal }}">
                                                                    <button type="button"
                                                                        class="btn btn-danger ms-2 remove-goal">×</button>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                        <button type="button" class="btn btn-sm btn-primary"
                                                            id="add-goal">+
                                                            Add Goal</button>
                                                    </div>

                                                    <hr>

                                                    {{-- HISTORY --}}
                                                    <h4>Our History</h4>
                                                    <div class="form-group mb-3">
                                                        {{-- <label>History Description</label> --}}
                                                        <label class="form-label">History Description <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="history_description" class="form-control text-area" rows="4">{{ old('history_description', $aboutUs->history['description'] ?? '') }}</textarea>
                                                    </div>

                                                    {{-- TIMELINE --}}
                                                    <label>Timeline</label>
                                                    <div id="timeline-wrapper">

                                                        @php
                                                            $timeline = $aboutUs->history['timeline'] ?? [
                                                                ['year' => '', 'title' => '', 'description' => ''],
                                                            ];
                                                        @endphp

                                                        @foreach ($timeline as $item)
                                                            <div class="timeline-item border p-3 mb-2">
                                                                <div class="row mb-2">
                                                                    <div class="col-md-3">
                                                                        <input type="text" name="timeline[year][]"
                                                                            class="form-control" placeholder="Year"
                                                                            value="{{ $item['year'] }}">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="text" name="timeline[title][]"
                                                                            class="form-control" placeholder="Title"
                                                                            value="{{ $item['title'] }}">
                                                                    </div>
                                                                </div>

                                                                <textarea name="timeline[description][]" class="form-control" placeholder="Description">{{ $item['description'] }}</textarea>

                                                                <button type="button"
                                                                    class="btn btn-danger mt-2 remove-timeline">Remove</button>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <button type="button" class="btn btn-primary mt-2" id="add-timeline"
                                                        style="width: auto;">
                                                        + Add Timeline
                                                    </button>


                                                    {{-- <br> --}}

                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-label-primary">Save
                                                            About</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        /* ---------------- GOALS ---------------- */
        document.getElementById('add-goal').addEventListener('click', function() {
            document.getElementById('goals-wrapper').insertAdjacentHTML('beforeend', `
        <div class="d-flex mb-2 goal-item">
            <input type="text" name="goals[]" class="form-control">
            <button type="button" class="btn btn-danger ms-2 remove-goal">×</button>
        </div>
    `);
        });

        /* ---------------- REMOVE BUTTONS ---------------- */
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-goal')) {
                e.target.closest('.goal-item').remove();
            }

            if (e.target.classList.contains('remove-timeline')) {
                e.target.closest('.timeline-item').remove();
            }
        });

        /* ---------------- TIMELINE (UPDATED) ---------------- */
        document.getElementById('add-timeline').addEventListener('click', function() {
            document.getElementById('timeline-wrapper').insertAdjacentHTML('beforeend', `
        <div class="timeline-item border p-3 mb-2">
            <div class="row mb-2">
                <div class="col-md-3">
                    <input type="text" name="timeline[year][]" class="form-control" placeholder="Year">
                </div>
                <div class="col-md-4">
                    <input type="text" name="timeline[title][]" class="form-control" placeholder="Title">
                </div>
                <div class="col-md-5">
                    <button type="button" class="btn btn-danger remove-timeline">Remove</button>
                </div>
            </div>

            <textarea name="timeline[description][]" class="form-control"
                placeholder="Description"></textarea>
        </div>
    `);
        });
    </script>
@endsection
