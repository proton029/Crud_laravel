<div class="form-group"> 
    <label for="first_name">first name</label>
    <input  id="first_name" type="text" name="first_name" value={{old('first_name',optional($post ?? null)->first_name)}}>
</div>
<div class="form-group">
    <label for="lastName">Last Name</label>
    <input id="lastName" type="text" name="lastName" value={{old('lastName',optional($post ?? null)->lastName)}}>
</div>
<div class="form-group">
    <label for="Address">Address</label>
    <input id="Address" type="text" name="Address" value={{old('Address',optional($post ?? null)->Address)}}>
</div>
<div class="form-group">
    <label for="password">pwd</label>
    <input id="password" type="password" name="password" value={{old('password',optional($post ?? null)->password)}}>
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input id="phone" type="text" name="phone" value={{old('phone',optional($post ?? null)->phone)}}>
</div>
<div class="form-group">
    <label for="email">Mail</label>
    <input id="email" type="email" name="email" value={{old('email',optional($post ?? null)->email)}}>
</div>
<div class="form-group">
    <label for="status">status</label>
    <input id="status" type="text" name="status" value={{old('status',optional($post ?? null)->status)}}>
</div>
