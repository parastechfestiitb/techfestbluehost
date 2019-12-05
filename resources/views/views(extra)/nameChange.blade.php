<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Name Confirmation</title>
</head>
<body>
<div class="content">
    <div class="e-message message">
        You have registered with name <span class="text-warning">{{$participant->name}}</span>. You can only change your name once before downloading certificate. Once you are sure, click on the checkbox below to proceed to certificate portal.
        <br>
        <br>
        <div class="d-flex">
            <span>If you want to change your name, edit it here:</span>
            <input class=" ml-5 p-2" type="text" v-model="newName">
        </div>
    </div>
    <div class="w-100">
        <div class="mt-5 e-message message d-flex justify-content-between" v-if="newName===participant.name">
            <div>
                <label>
                    <input v-model="confirmCheck" type="checkbox" class="checkbox"> Yes, I <span class="text-warning" >confirm</span> that above mentioned name is my name, and I <span class="text-warning">don't want to update it.</span>
                </label>
            </div>
            <div v-if="confirmCheck">
                <div class="button" @click="confirmClick">Confirm</div>
            </div>
        </div>
        <div class="mt-5 e-message message d-flex justify-content-between" v-else>
            <div>
                <label>
                    <input v-model="nameCheck" type="checkbox" class="checkbox"> I <span class="text-warning">confirm</span> that I want to update my name, and am aware that I <span class="text-warning">won't be able to change it again.</span>
                </label>
            </div>
            <div v-if="nameCheck">
                <div class="button" @click="updateClick">Update</div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
