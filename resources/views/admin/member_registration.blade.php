<div class="modal" id="memberRegistrationModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Member Registration</h5>
                <button type="button" class="btn-close" onclick="closeMemberRegistration()"></button>
            </div>
            <div class="modal-body">
                <!-- Form fields for member registration -->
                <form id="memberRegistrationForm">
                    <div class="mb-3">
                        <label for="memberName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="memberName" required>
                    </div>
                    <div class="mb-3">
                        <label for="memberEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="memberEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="memberRole" class="form-label">Role</label>
                        <input type="text" class="form-control" id="memberRole" required>
                    </div>
                    <div class="mb-3">
                        <label for="availability" class="form-label">Salary</label>
                        <input type="date" class="form-control" id="sal" required>
                    </div>
                    <div class="mb-3">
                        <label for="availability" class="form-label">Availability</label>
                        <input type="date" class="form-control" id="sal" required>
                    </div>
                    <div class="mb-3">
                        <label for="availability" class="form-label">User Account Name</label>
                        <input type="date" class="form-control" id="accname" required>
                    </div>
                    <div class="mb-3">
                        <label for="availability" class="form-label">Password</label>
                        <input type="date" class="form-control" id="pw" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="registerMember()">Register Member</button>
                <button type="button" class="btn btn-success" onclick="registerMember()">Remove Member</button>
                <button type="button" class="btn btn-success" onclick="registerMember()">Delete Record</button>
                <button type="button" class="btn btn-secondary" onclick="closeMemberRegistration()">Close</button>
            </div>
        </div>
    </div>
</div>
