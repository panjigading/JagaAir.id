<?php

namespace App\Mail;

use App\Models\Laporan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TanggapanLaporan extends Mailable
{
    use Queueable, SerializesModels;

    public Laporan $laporan;

    public function __construct(Laporan $laporan)
    {
        $this->laporan = $laporan;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $latestStatus = $this->laporan->riwayats->first()->status ?? 'Updated';

        return new Envelope(
            subject: "[Status Laporan Anda Telah Diperbarui - ({$latestStatus})",
        );
    }

    /**
     * Get the message content definition.
     */
     public function content(): Content
    {
        // Pass the Laporan object to the email view
        return new Content(
            view: 'emails.tanggapan_laporan',
            with: [
                'latestStatus' => $this->laporan->riwayats->first(),
            ]
        );
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
