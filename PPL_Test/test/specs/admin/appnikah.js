describe('Laravel Project Testing', () => {
    it('should interact with Approve and Tolak buttons for uprovePindah data', async () => {
      // Login page
      await browser.url('http://127.0.0.1:8000/login');
  
      // Login
      const emailInput = await $('#email');
      const passwordInput = await $('#password');
      await emailInput.setValue('admin@gmail.com');
      await passwordInput.setValue('12345678');
      const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
      await loginButton.click();
  
      // Ke halaman uprovesidi
      await browser.url('http://127.0.0.1:8000/admin/uprovePernikahan');
  
      // Temukan baris yang berisi "Nama Jemaat nikah" tertentu untuk disetujui
      const rowToApprove = await $('//td[contains(text(), "Irvan ♥ Santa")]/parent::tr');

      const approveID = await rowToApprove.$('a.btn.btn-success').getAttribute('href');
  
      // Klik tombol "Setuju" untuk data uprovepernikahan tertentu
      const approveButton = await rowToApprove.$('a.btn.btn-success');
      await approveButton.waitForClickable();
      await approveButton.click();
  
      // Baris yang berisi "Nama Jemaat menikah" khusus untuk penolakan
      const rowToReject = await $('//td[contains(text(), "asd")]/parent::tr');

      const rejectID = await rowToReject.$('a.btn.btn-danger').getAttribute('href');
  
      // Klik tombol "Tolak" untuk data uprovemenikah tertentu
      const rejectButton = await rowToReject.$('a.btn.btn-danger');
      await rejectButton.waitForClickable();
      await rejectButton.click();
  
    });
  });
  