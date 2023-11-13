
//Ajax for Deleting Employees
$(document).ready(function () {
    // Handle the click event for the "Delete" button within the modal
    $("#confirmDelete").on("click", function () {
        var employeeID = $(this).data("employee-id");
        $.ajax({
            type: "POST",
            url: "delete_employee.php",
            data: { employee_id: employeeID },
            success: function (data) {
                // Handle the response from the server
                if (data === 'Employee deleted successfully') {
                    // Reload the page or update the table to reflect the changes
                    location.reload();
                } else {
                    alert("Error deleting employee");
                }
            }
        });
    });

    // Handle the click event for the ".edit_delete" elements
    $(".edit_delete").on("click", function () {
        var employeeID = $(this).data("employee-id");
        // Set the data-employee-id attribute for the "confirmDelete" button
        $("#confirmDelete").data("employee-id", employeeID);
    });
});


//Ajax For Updating Employee
$(document).ready(function () {
    // ...

    // Handle the click event for the ".edit_employee" elements
    $(".edit_employee").on("click", function () {
        var employeeID = $(this).data("employee-id");

        // Use AJAX to fetch the employee data based on employeeID
        $.ajax({
            type: "GET",
            url: "get_employee_data.php?employee_id=" + employeeID,
            success: function (data) {
                var employeeData = JSON.parse(data);
                $("#first_name").val(employeeData.firstName);
                $("#last_name").val(employeeData.lastName);
                $("#department_id").val(employeeData.departmentID);
                $("#job_id").val(employeeData.jobID);
                $("#employment_type").val(employeeData.employmentType);
                $("#salary").val(employeeData.salary);
                $("#salary_frequency").val(employeeData.salaryFrequency);

                // Set the data-employee-id attribute for the "confirmUpdate" button
                $("#confirmUpdate").data("employee-id", employeeID);
            }
        });
    });

// Handle the click event for the "confirmUpdate" button within the modal
$("#confirmUpdate").on("click", function () {
    var employeeID = $(this).data("employee-id");
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var department_id = $("#department_id").val();
    var job_id = $("#job_id").val();
    var employment_type = $("#employment_type").val();
    var salary = $("#salary").val();
    var salary_frequency = $("#salary_frequency").val();

    // Use AJAX to send the updated employee data to the server
    $.ajax({
        type: "POST",
        url: "update_employee.php",
        data: {
            employee_id: employeeID,
            first_name: first_name,
            last_name: last_name,
            department_id: department_id,
            job_id: job_id,
            employment_type: employment_type,
            salary: salary,
            salary_frequency: salary_frequency
        },
        success: function (data) {
            if (data === 'Employee updated successfully') {
                location.reload();
                // Alert for successful update
                alert("Employee updated successfully");
            } else {
                alert("Error updating employee");
            }
        }
    });
});

});

//Ajax For Handling Approval of Leaving
$(document).ready(function () {
    $(".action_label3").on("click", function () {
        var leaveID = $(this).data("leave-id");

        // Store the leave ID in the modal button's data attribute
        $("#confirmApprove").data("leave-id", leaveID);

        // Open the modal
        $('#approving').modal('show');
    });

    $("#confirmApprove").on("click", function () {
        var leaveID = $(this).data("leave-id");

        $.ajax({
            type: "POST",
            url: "approve_leave.php",
            data: { id: leaveID },
            success: function (data) {
                if (data === 'Leave approved successfully') {
                    location.reload();
                    alert("Leaved approved successfully");
                } else {
                    alert("Error approving leave");
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                alert("Error during Ajax request");
            }
        });
    });
   
});
$(document).ready(function () {
    $(".action_label4").on("click", function () {
        var leaveID = $(this).data("decline-leave-id");

        // Store the leave ID in the modal button's data attribute
        $("#confirmReject").data("decline-leave-id", leaveID);

        // Open the modal
        $('#rejecting').modal('show');
    });

    $("#confirmReject").on("click", function () {
        var leaveID = $(this).data("decline-leave-id");

        $.ajax({
            type: "POST",
            url: "reject_leave.php",
            data: { id: leaveID },
            success: function (data) {
                if (data === 'Leave rejected successfully') {
                    location.reload();
                    alert("Leave rejected successfully");
                } else {
                    alert("Error rejecting leave");
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                alert("Error during Ajax request");
            }
        });
    });
});



