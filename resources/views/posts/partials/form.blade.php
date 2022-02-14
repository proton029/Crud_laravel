<div> <label for="first_name">first name</label>
    <input type="text" name="first_name" value={{old('first_name',optional($post ?? null)->first_name)}}>
</div>
<div><label for="lastName">Last Name</label>
    <input type="text" name="lastName" value={{old('lastName',optional($post ?? null)->lastName)}}>
</div>
<div>
    <label for="Address">Address</label>
    <input type="text" name="Address" value={{old('Address',optional($post ?? null)->Address)}}>
</div>
<div>
    <label for="password">pwd</label>
    <input type="password" name="password" value={{old('password',optional($post ?? null)->password)}}>
</div>
<div>
    <label for="phone">Phone</label>
    <input type="text" name="phone" value={{old('phone',optional($post ?? null)->phone)}}>
</div>
<div>
    <label for="email">Mail</label>
    <input type="email" name="email" value={{old('email',optional($post ?? null)->email)}}>
</div>
<div>
    <label for="status">status</label>
    <input type="text" name="status" value={{old('status',optional($post ?? null)->status)}}>
</div>
