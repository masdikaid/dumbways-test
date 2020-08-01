# list of active promo
voucherlist = {
    "DumbWaysJos" : {
        "disc"      :   21.1,
        "minbill"   :   50000,
        "maxvalue"  :   20000
    },
    "DumbWaysMantap" : {
        "disc"      :   30,
        "minbill"   :   80000,
        "maxvalue"  :   40000
    }
}

# define a function for calculate the voucher
def hitungVoucer(vouchercode, bill):
    # define default value for charge an discount
    charge = bill
    discount = 0

    # check if voucher is active
    if vouchercode in voucherlist:
        # define voucher
        voucher = voucherlist[vouchercode]
        # check if bill meet the minimum payment requirements
        if bill >= voucher["minbill"]:
            print("\n===========| voucher '{}' berhasil diterapkan |===========".format(vouchercode))
            discount = bill * voucher["disc"] / 100
            # check if discount meet maximum value given
            if discount > voucher["maxvalue"]:
                discount = voucher["maxvalue"]
            # calculate new charge value
            charge = charge-discount
        else:
            print("\n===========| voucher tidak dapat digunakan, pembayaran minimum {}|===========".format(voucher["minbill"]))
    else:
        print("\n===========| maaf kode voucher tidak ditemukan |===========")

    # print result
    print("""
        - Uang Yang Harus Dibayar : {}
        - Diskon : {}
        - Kembalian : {}
        """.format(int(charge), int(discount), int(bill-charge)))


# run the input value from dumbways test
if __name__ == "__main__":
    hitungVoucer("DumbWaysJos",100000)
