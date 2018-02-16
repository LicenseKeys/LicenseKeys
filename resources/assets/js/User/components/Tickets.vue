<template>
<div class="container container-border">
    <div class="row">
    <div class="col-lg-3">
        <div class="card quick">
        <!-- Default panel contents -->
        <div class="card-header"><i class="fa fa-fw fa-filter"></i>Quick Sort</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa fa-fw fa-dot-circle-o" aria-hidden="true"></i>Open<span class="badge badge-pill badge-default">14</span></li>
            <li class="list-group-item"><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Closed<span class="badge badge-pill badge-default">14</span></li>
            <li class="list-group-item"><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Answered<span class="badge badge-pill badge-default">14</span></li>
            <li class="list-group-item"><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Customer-Reply<span class="badge badge-pill badge-default">14</span></li>
        </ul>
        </div>
    </div>
    <div class="col-lg-9">
        <table class="table table-striped">
            <thead class="thead-danger">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Last Reply</th>
            </tr>
            </thead>
            <tbody class="col-lg-12">

            </tbody>
        </table>
    </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>
