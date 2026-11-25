// 1. deliveries.php — litres check (as typed, max 60 litres)
const litres = document.querySelector('#litres');
const litresMessage = document.querySelector('#litres-message');

function checkLitres() {
    const amount = Number(litres.value);

    if (litres.value === '') {
        litresMessage.textContent = '';
        litres.classList.remove('invalid');
        return false;
    } else if (amount <= 0) {
        litresMessage.textContent = 'Litres must be more than 0.';
        litres.classList.add('invalid');
        return false;
    } else if (amount > 60) {
        litresMessage.textContent = 'Over 60 litres in one session. Check the reading.';
        litres.classList.add('invalid');
        return false;
    } else {
        litresMessage.textContent = '';
        litres.classList.remove('invalid');
        return true;
    }
}

if (litres && litresMessage) {
    litres.addEventListener('input', checkLitres);
}

// 2. deliveries.php — member number check (on blur)
const member = document.querySelector('#member');
const memberMessage = document.querySelector('#member-message');
const memberShape = /^ER-[0-9]{4}$/;

function checkMember() {
    const value = member.value.trim().toUpperCase();
    member.value = value;

    if (value === '') {
        memberMessage.textContent = '';
        member.classList.remove('invalid');
        return false;
    } else if (!memberShape.test(value)) {
        memberMessage.textContent = 'A member number looks like ER-0001.';
        member.classList.add('invalid');
        return false;
    } else {
        memberMessage.textContent = '';
        member.classList.remove('invalid');
        return true;
    }
}

if (member && memberMessage) {
    member.addEventListener('blur', checkMember);
}

// 3. deliveries.php — form submit check
const deliveryForm = document.querySelector('#delivery-form');

function recordDelivery(event) {
    checkMember();
    checkLitres();

    if (member.classList.contains('invalid')) {
        event.preventDefault();
        member.focus();
    } else if (litres.classList.contains('invalid')) {
        event.preventDefault();
        litres.focus();
    }
}

if (deliveryForm) {
    deliveryForm.addEventListener('submit', recordDelivery);
}

// 4. deliveries.php — accepted litres total
const acceptedTotalCell = document.querySelector('#accepted-total');
if (acceptedTotalCell) {
    const rows = document.querySelectorAll('tbody tr');
    let total = 0;

    for (const row of rows) {
        const cells = row.querySelectorAll('td');
        if (cells.length > 4 && cells[4].textContent.trim() === 'Yes') {
            total = total + Number(cells[3].textContent);
        }
    }

    acceptedTotalCell.textContent = total > 0 ? total.toFixed(2) : '';
}

// 5. routes.php — live route filter (main section)
const routeSearch = document.querySelector('#route-search');
const routeSections = document.querySelectorAll('main section');
const routeCount = document.querySelector('#route-count');

function filterRoutes() {
    const wanted = routeSearch.value.trim().toLowerCase();
    let visible = 0;

    for (const section of routeSections) {
        const matches = section.textContent.toLowerCase().includes(wanted);
        section.hidden = !matches;
        if (matches) {
            visible = visible + 1;
        }
    }

    routeCount.textContent = visible + ' of ' + routeSections.length + ' routes';
}

if (routeSearch && routeCount) {
    routeSearch.addEventListener('input', filterRoutes);
    filterRoutes();
}

// 6. register.php — phone & National ID checks
const phone = document.querySelector('#phone');
const phoneMessage = document.querySelector('#phoneMessage');
if (phone && phoneMessage) {
    phone.addEventListener('blur', function () {
        const value = phone.value.trim();
        const valid = value === '' || /^(07|01)[0-9]{8}$/.test(value);
        phone.classList.toggle('invalid', !valid);
        phoneMessage.textContent = valid ? '' : 'Phone number should start with 07 or 01 and have 10 digits.';
    });
}

const nationalID = document.querySelector('#nationalID');
const nationalIDMessage = document.querySelector('#nationalIDMessage');
if (nationalID && nationalIDMessage) {
    nationalID.addEventListener('blur', function () {
        const value = nationalID.value.trim();
        const valid = value === '' || /^[0-9]{7,8}$/.test(value);
        nationalID.classList.toggle('invalid', !valid);
        nationalIDMessage.textContent = valid ? '' : 'National ID must be 7 or 8 digits.';
    });
}