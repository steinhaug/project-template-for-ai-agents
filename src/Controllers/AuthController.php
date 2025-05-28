
<?php
class AuthController {
    public function login($email, $password) {
        // TODO: Implement login logic
        return false;
    }

    public function logout() {
        session_destroy();
        header('Location: /');
        exit();
    }

    public function resetPassword($email) {
        // TODO: Implement password reset
        return false;
    }
}
?>
