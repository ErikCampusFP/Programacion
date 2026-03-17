package banca;

/**
 * Representa una cuenta bamcaria.
 * @author Erik Pizarro Sanabria
 * @version 1.0
 * @since 2026
 */

public class Cuenta {
	private Cliente cliente;
	private String iban;
	private double saldo;
	
	/**
	 * Constructor que recibe todos los datos al abrir la cuenta.
	 * @param cliente
	 * @param iban
	 * @param saldo
	 */
	
	public Cuenta(Cliente cliente, String iban, double saldo) {
		super();
		this.cliente = cliente;
		this.iban = iban;
		this.saldo = saldo;
	}
	
	
	/**
	 * Constructor que recibe el cliente e iban y abre una cuenta con saldo 0
	 * @param cliente
	 * @param iban
	 */
	
	public Cuenta(Cliente cliente, String iban) {
		super();
		this.cliente = cliente;
		this.iban = iban;
		this.saldo = 0;
	}

	
	@Override
	public String toString() {
		return "Cuenta [cliente=" + cliente + ", iban=" + iban + ", saldo=" + saldo + "]";
	}


	public Cliente getCliente() {
		return cliente;
	}


	public void setCliente(Cliente cliente) {
		this.cliente = cliente;
	}


	public String getIban() {
		return iban;
	}


	public void setIban(String iban) {
		this.iban = iban;
	}


	public double getSaldo() {
		return saldo;
	}
	
	public void setSaldo(double saldo) {
		this.saldo = saldo;
	}

	/**
	 * Realiza un ingreso en la cuenta
	 * @param cantidad a ingresar
	 * @return saldo actualizado
	 */
	
	
	public double ingresar(double cantidad) {
		this.saldo += cantidad;
		return this.saldo;
	}
	
	public double retirar(double cantidad) {
		this.saldo -= cantidad;
		return this.saldo;
	}
	
	
	
	
}
