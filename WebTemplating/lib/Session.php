<?php
class Session {
    // Constructor to start the session if not already started
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Set a session variable
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    // Get a session variable
    public function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    // Check if a session variable exists
    public function exist($key) {
        return isset($_SESSION[$key]);
    }

    // Delete a session variable
    public function delete($key) {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    // Set a flash message
    public function setFlash($key, $value) {
        $_SESSION['flash'][$key] = $value;
    }

    // Get and delete a flash message
    public function getFlash($key) {
        $value = isset($_SESSION['flash'][$key]) ? $_SESSION['flash'][$key] : null;
        $this->deleteFlash($key);
        return $value;
    }

    // Delete a specific flash message
    public function deleteFlash($key) {
        if (isset($_SESSION['flash'][$key])) {
            unset($_SESSION['flash'][$key]);
        }
    }

    // Delete all flash messages
    public function deleteAllFlash() {
        if (isset($_SESSION['flash'])) {
            unset($_SESSION['flash']);
        }
    }

    // Destroy all sessions
    public function deleteAll() {
        session_destroy();
    }
    public function commit() {
        session_commit();
    }
}
?>
