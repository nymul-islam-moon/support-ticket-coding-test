## Features

### Admin Features

- **Admin Login**: Admins can log in through a dedicated admin login page.
- **Admin Creation via Seeder**: Admins are created using a seeder (`AdminSeeder`), and they cannot register via the user-facing panel. By default, an admin is seeded with predefined credentials.
- **Ticket Management**: Admins can view all tickets created by customers.
- **Close Tickets**: Admins can close any ticket. Only Admins are authorized to close tickets.
- **Email Notifications**: Admins receive an email when a new ticket is created by a customer.

### Customer Features

- **Customer Registration & Login**: Customers can register and log in via the customer-facing panel.
- **Ticket Creation**: Customers can create tickets through their dashboard.
- **Email Notifications**: Customers are notified via email when the Admin closes their ticket.

### Email Notifications

1. **When a Customer creates a ticket**:
    - The Admin (created via the seeder) receives an email with the details of the new ticket, including the title and description.
    
2. **When an Admin closes a ticket**:
    - The Customer who created the ticket receives an email notifying them that their ticket has been closed.
