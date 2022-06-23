$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false
    });
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    $('#reservationdatetime').datetimepicker({
        icons: {
            time: 'far fa-clock'
        }
    });
    $('#reservationdatetime_edit').datetimepicker({
        icons: {
            time: 'far fa-clock'
        }
    });
});

$(document).ready(function () {
    $("#openAddModal").click(function () {
        $("#modal-default").modal();
    });

    $('#save_event').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "/admin/simpan_event",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                if (data == "Success") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil menambahkan data event.',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            this.reset();
                            location.reload();
                        }
                    })
                } else {
                    Swal.fire(
                        'Error!',
                        'Gagal menambahkan data event.',
                        'error'
                    )
                }
            }
        });
    });

    $('#update_event').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "/admin/update_event/" + $('#id_event_edit').val(),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                if (data == "success") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil merubah data event.',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            this.reset();
                            location.reload();
                        }
                    })
                } else {
                    Swal.fire(
                        'Error!',
                        'Gagal merubah data event.',
                        'error'
                    )
                }
            }
        });
    });
});

function getData(id) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "POST",
        url: "/admin/get_event",
        data: {
            id_event: id
        },
        success: function (res) {
            //console.log(res);
            var obj = JSON.parse(res);
            $("#id_event_edit").val(obj.id_event);
            $("#nama_event_edit").val(obj.nama_event);
            $("#photo").attr("src", $("#photo").attr("src") + '/' + obj.gambar);
            $("#deskripsi_edit").val(obj.deskripsi);
            $("#waktu_edit").val(obj.waktu);
            $("#modal-default-edit").modal();
        }
    })
}

function hapus(id) {
    Swal.fire({
        title: 'Hapus Operator?',
        text: "Apakah Anda yakin ingin menghapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "/admin/delete_event",
                data: {
                    id_event: id
                },
                success: function (res) {
                    if (res == "success") {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Berhasil menghapus data event.',
                            showConfirmButton: false,
                            timer: 1500
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                location.reload();
                            }
                        })
                    } else {
                        Swal.fire(
                            'Error!',
                            'Gagal menghapus data event.',
                            'error'
                        )
                    }
                }
            })

        }
    })
}
