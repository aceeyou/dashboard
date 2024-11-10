@push('css')
    <link rel="stylesheet" href="{{ asset('css/projects-form.css') }}" type="text/css">
@endpush
<div>
    <h1>Create a new Project</h1>
    <form id="projects-form__form" action="">
        <div class="input-grp">
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="input-row">
            <div class="input-grp">
                <label for="project-type">Project Type</label>
                <input type="text" name="project-type" id="project-type">
            </div>
            <div class="input-grp">
                <label for="initial-status">Initial Status</label>
                <div class="select">
                    <span>
                        ❇️
                    </span>
                    <select name="initial-status" id="initial-status">
                        <option value="New">New</option>
                        <option value="Planning">Planning</option>
                        <option value="Plan Finalization">Plan Finalization</option>
                        <option value="Development">Development</option>
                        <option value="Review">Review</option>
                        <option value="Publication">Publication</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="input-grp">
            <label for="owner">Owner</label>
            <div class="owner">
                <div class="avatar">
                    <img src="{{Auth::user()->getImageUrl()}}" alt="user avatar">
                </div>
                <div class="owner-name">{{Auth::user()->name}}</div>
            </div>
        </div>
    </form>
</div>