<?php



namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Contact
 *
 * @author edenb
 */
class Contact {
    
    #[Assert\NoBlank()]
    #[Assert\Length(min:2, max:100)]
    private ?string $nom;

    #[Assert\NoBlank()]
    #[Assert\Email()]
    private ?string $email;

    #[Assert\NoBlank()]
    private ?string $message;
    public function getNom(): ?string {
        return $this->nom;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function getMessage(): ?string {
        return $this->message;
    }

    public function setNom(?string $nom): void {
        $this->nom = $nom;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function setMessage(?string $message): void {
        $this->message = $message;
    }
}
