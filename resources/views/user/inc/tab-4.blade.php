
<div id="demo-cls-tab4" class="tab-pane mar-btm">
    <div class="form-group col-lg-4">
        <label class="control-label text-semibold">{{ _('Job Title') }}</label>
        <select class="form-control" name="job_details['job_id']">
            <option></option>
            <option value="male">Web Developer</option>
            <option value="female">Web Designer</option>
            <option value="female">Production Manager</option>
            <option value="female">HR Assistant</option>
        </select>
    </div>
    <div class="form-group col-lg-4">
        <label class="control-label text-semibold">{{ _('Level') }}</label>
        <select class="form-control" name="job_details['level']">
            <option></option>
            <option value="male">Junior</option>
            <option value="female">Mid</option>
            <option value="female">Senior</option>
        </select>
    </div>
    <div class="form-group col-lg-4">
        <label class="control-label text-semibold">{{ _('Salary') }}</label>
        <input type="text" class="form-control" name="job_details['salary']" placeholder="{{ _('Salary') }}">
    </div>
    <div class="form-group col-lg-6">
        <label class="control-label text-semibold">{{ _('Shift from') }}</label>
        <input type="time" class="form-control" name="emergency_contact['shift_from']" placeholder="{{ _('Shift from') }}">
    </div>
    <div class="form-group col-lg-6">
        <label class="control-label text-semibold">{{ _('Shift to') }}</label>
        <input type="time" class="form-control" name="emergency_contact['shift_to']" placeholder="{{ _('Shift to') }}">
    </div>
</div>